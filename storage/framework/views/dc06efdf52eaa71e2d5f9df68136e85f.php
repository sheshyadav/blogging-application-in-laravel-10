
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/css/socializer.min.css"
/>
<link
    rel="stylesheet"
    type="text/css"
    href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
/>

<!-- Button trigger modal -->
<button
    type="button"
    class="btn btn-floating share-floating-button"
    data-mdb-toggle="modal"
    title="Share this post"
    data-mdb-target="#exampleModal">
    <i class="fa fa-share-alt"></i>
</button>

<!-- Modal -->
    <div
    class="modal fade"
    id="exampleModal"
    data-mdb-backdrop="static"
    data-mdb-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="exampleModalLabel">Share:</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div
                class="mt-1"
                id="ShareComponent"
                data-features="32px,opacity,icon-white,pad,circle"
                data-sites="facebook,twitter,whatsapp,fbmessenger,linkedin,telegram,pinterest"
                data-meta-link="<?php echo e($url); ?>"
                data-meta-title="<?php echo e($title); ?>">
            </div>

            <div class="my-3">
                <input
                    type="text"
                    value="<?php echo e($url); ?>"
                    class="form-control"
                    onclick="this.select();"
                />
            </div>
        </div>
        <div class="modal-footer">
            You can bookmark this URL and revisit it later to read more about this blog.
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/js/socializer.min.js"></script>

<?php /**PATH D:\xampp\htdocs\softwala\resources\views/components/share-component.blade.php ENDPATH**/ ?>