<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-7 text-center  g-2 py-5  hover14 column">
                    <div class="col finca-box">
                        <a href="./index.php?wlang=es">
                            <figure><img src="./assets/image/flag_spain.svg" width="150" alt=""></figure>
                        </a>
                    </div>
                    <div class="col finca-box">
                        <a href="./en">
                            <figure><img src="./assets/image/flag_united-kingdom.svg" alt="" width="150"></figure>
                        </a>
                    </div>
                    <div class="col finca-box">
                        <a href="./de">
                            <figure><img src="./assets/image/flag_germany.svg" width="150" alt=""></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>
