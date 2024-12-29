$(document).ready(function(){
$(".alert").fadeOut(10000);
/**---- share component initialize ----**/
if(document.getElementById("ShareComponent")){
    socializer( '#ShareComponent' );
}
/**---- share component initialize ----**/

/*
|-----------------------------------------------------------------------------
|   Sweet alert messages section for user
|-----------------------------------------------------------------------------
*/
const spinner = `<div class="spinner-border text-light spinner-border-sm mx-2" role="status"></div>`;
const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
});

/*
|-----------------------------------------------------------------------------
|   Website subscriber function
|-----------------------------------------------------------------------------
*/

    $("#subscriberForm").submit(function(e){
        e.preventDefault();
        const self = $('#submit_button');
        $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:'/website/subscriber', type:'post', dataType:'json', data:{'subscriber_email':$("#subscriber_email").val()},
            beforeSend:function(){ self.append(spinner);},
            success:function(responce){
            if(responce.status){
                self.children("div:first").remove();
                Toast.fire({icon:'success', title:responce.data});
            }else{
                Toast.fire({icon:'error', title:responce.data});
                self.children("div:first").remove();
                }
            },error:function(errorMessage){
                Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                self.children("div:first").remove();
            }
        });
    });

/*
|-----------------------------------------------------------------------------
|   Datatable initialize function
|-----------------------------------------------------------------------------
*/

    var TableWithData = null;
    if($(".data-table-list")[0]){
    TableWithData = $('.data-table-list').DataTable({responsive: true});
    }

/*
|-----------------------------------------------------------------------------
|   Table Item Delete function
|-----------------------------------------------------------------------------
*/
    $(document).on("click", ".tableDatadelete", function(){
        const self = $(this);
        const udata = JSON.parse($(this).attr('for'));
        Swal.fire({
            title: 'Delete Item?',
            text: "Are you sure, want to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:udata.url, type:'post', dataType:'json', data:{'id':udata.id},
                    beforeSend:function(){ self.append(spinner);},
                    success:function(responce){
                        if(responce.status){
                            self.children("div:first").remove();
                            TableWithData.row( self.parents('tr') ).remove().draw();
                            Toast.fire({icon:'success', title:responce.data});
                        }else{
                            Toast.fire({icon:'error', title:responce.data});
                            self.children("div:first").remove();
                        }
                    },error:function(errorMessage){
                        Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                        self.children("div:first").remove();
                    }
                });
            }
        });
    });

/*
|-----------------------------------------------------------------------------
|   Update Item status function
|-----------------------------------------------------------------------------
*/
    $(document).on("click", ".updateStatus", function(){
        const udata = JSON.parse($(this).attr('for'));
        $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:udata.url, type:'post', dataType:'json', data:{'id':udata.id},
        success:function(responce){
            if(responce.status){
            }else{Toast.fire({icon:'error', title:responce.data});}
        },error:function(errorMessage){
            Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
        }
        });
    });

/*
|-----------------------------------------------------------------------------
|   genrate post slug url script
|-----------------------------------------------------------------------------
*/

    $(".slug-genrate").on({
        input:function(){
            this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, "");
            const _inputstring =  this.value.replace(/\s+/g, ' ').trim();
            $("#post_slug").val(_inputstring.replaceAll(' ', "-"));
        },
        blur:function(){
            if(this.value.length > 5){
                $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'/admin/post/slug/verify', type:'post', dataType:'json', data:{'slug': $("#post_slug").val()},
                success:function(responce){
                    if(!responce.status){
                        $("#post_slug_error").html(responce.data.slug)
                    }else{
                        $("#post_slug_error").html(`<span class="text-success">${responce.data}</span>`);
                    }
                },error:function(errorMessage){
                    Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                }
                });
            }
        }
    });

    $("#post_slug").on({
        input:function(){
            this.value = this.value.replace(/[^a-zA-Z0-9- ]/g, "");
            this.value = this.value.replaceAll(' ', "-");
        },
        blur:function(){
            if(this.value.length > 5){
                $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'/admin/post/slug/verify', type:'post', dataType:'json', data:{'slug': this.value},
                success:function(responce){
                    if(!responce.status){
                        $("#post_slug_error").html(responce.data.slug)
                    }else{
                        $("#post_slug_error").html(`<span class="text-success">${responce.data}</span>`);
                    }
                },error:function(errorMessage){
                    Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                }
                });
            }
        }
    });

/*
|-----------------------------------------------------------------------------
|   Post thumbnail image update show in box
|-----------------------------------------------------------------------------
*/
    $("#post_thumbnail").on("change", function(){
        document.getElementById('post_thumbnail_imgtag').src=window.URL.createObjectURL(this.files[0]);
        if($("#post_thumbnail_imgtag").hasClass("d-none")){
        $("#post_thumbnail_imgtag").removeClass('d-none');
        }
        if(document.getElementById("post_thumbnail_status")){
        $("#post_thumbnail_status").val('1');
        }
    });

    $("#remove_thumbnail").on("click", function(){
        $("#post_thumbnail_imgtag").addClass('d-none');
        $("#post_thumbnail").val(null);
        if(document.getElementById("post_thumbnail_status")){
        $("#post_thumbnail_status").val('0');
        }
    });


/*
|-----------------------------------------------------------------------------
|   image upload function
|-----------------------------------------------------------------------------
*/
    $(".upload_image_file").on("click", function(e){
        if(document.getElementById('fileupload')){ $("#fileupload").remove(); }
        const self = $(this);
        const udata = JSON.parse($(this).attr('for'));
        var oImg = document.createElement("input");
        oImg.setAttribute('type', 'file');
        oImg.setAttribute('name', 'fileupload');
        oImg.setAttribute('id', 'fileupload');
        oImg.setAttribute('accept', 'image/jpg, image/png, image/jpeg');
        oImg.setAttribute('style', 'opacity:0');
        document.body.appendChild(oImg);
        var tag = document.getElementById("fileupload");
        tag.click();
        tag.addEventListener('change', function(){
            let formData = new FormData();
            formData.append("file", this.files[0]);
            formData.append("id", udata.id);
            if(parseInt(this.files[0].size) <= 2097152){
                $.ajax({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: udata.url, dataType: 'JSON', cache: false, contentType: false,
                    processData: false, data: formData, type: 'post',
                    beforeSend:function(){ processing(); },
                    success:function(responce){
                        if(responce.status){
                        self.attr('src', responce.data);
                        Toast.fire({icon:'success', title:'File uploaded successfully.'});
                        }else{
                        Toast.fire({icon:'error', title:responce.data});
                        }
                    },error:function(errorMessage){
                        Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                    }
                });
            }else{ Toast.fire({icon:'error', title:'Please upload an image no larger than 2 MBs.'});}
            if(document.getElementById('fileupload')){ $("#fileupload").remove(); }
        });
    });

/*
|-----------------------------------------------------------------------------
|   gallery images url copy function
|-----------------------------------------------------------------------------
*/
    $(".CopyGalleryURL").on("click", function(){
        const self = $(this);
        navigator.clipboard.writeText(self.attr("data-id"));
    });

/*
|-----------------------------------------------------------------------------
|   gallery images upload function
|-----------------------------------------------------------------------------
*/

    $("#UploadGalleryImage").on("click", function(e){
        if(document.getElementById('fileupload')){ $("#fileupload").remove(); }
        var oImg = document.createElement("input");
        oImg.setAttribute('type', 'file');
        oImg.setAttribute('name', 'fileupload');
        oImg.setAttribute('id', 'fileupload');
        oImg.setAttribute('accept', 'image/jpg, image/png, image/jpeg, image/gif');
        oImg.setAttribute('style', 'opacity:0');
        oImg.setAttribute('multiple', 'true');
        document.body.appendChild(oImg);
        var tag = document.getElementById("fileupload");
        tag.click();
        tag.addEventListener('change', function(){
            let formData = new FormData();
            const fileCount = this.files.length;
            for(let i=0; i< fileCount; i++){
            formData.append("files[]", this.files[i]);
            }
            $.ajax({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'/admin/gallery/image/upload', dataType: 'JSON', cache: false, contentType: false,
                processData: false, data: formData, type: 'post',
                beforeSend:function(){ processing(); },
                success:function(responce){
                    if(responce.status){
                        Toast.fire({icon:'success', title:responce.data});
                        setTimeout(()=>{window.location.reload()},2000);
                    }else{
                        Toast.fire({icon:'error', title:JSON.stringify(responce.data)});
                    }
                },error:function(errorMessage){
                    Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                }
            });
            if(document.getElementById('fileupload')){ $("#fileupload").remove(); }
        });
    });

/*
|-----------------------------------------------------------------------------
|   gallery images upload function
|-----------------------------------------------------------------------------
*/
    $(".DeleteGalleryImage").on("click", function(){
        const self = $(this);
        const image = self.attr('data-id');
        Swal.fire({
            title: 'Delete Item?',
            text: "Are you sure, want to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:'/admin/gallery/image/delete', type:'post', dataType:'json', data:{'id':image},
                    beforeSend:function(){ self.append(spinner);},
                    success:function(responce){
                        if(responce.status){
                            self.children("div:first").remove();
                            Toast.fire({icon:'success', title:responce.data});
                            $("#"+self.attr('data-index')).remove();
                        }else{
                            Toast.fire({icon:'error', title:responce.data});
                            self.children("div:first").remove();
                        }
                    },error:function(errorMessage){
                        Toast.fire({icon:'error', title:JSON.stringify(errorMessage)});
                        self.children("div:first").remove();
                    }
                });
            }
        });
    });

});



/*
|----------------------------------------------------------------------------------
|   <!--  this function show the loader when any task excute by ajax   --!>
|----------------------------------------------------------------------------------
*/

function processing(){
    Swal.fire({
        title: 'Please wait...',
        timerProgressBar: true,
        allowOutsideClick: false,
        didOpen: () => { Swal.showLoading() },
    })
}



