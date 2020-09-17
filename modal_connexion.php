

<form action="connexion.php" method="post" >
<!-- Modal -->
<div class="modal fade" id="darkModalForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('image/rando.jpg');background-size:cover;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Connexion</strong> <a
              class="green-text font-weight-bold"><strong></strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->

          <div class="md-form mb-5">
            <input type="text" id="Form-email5" name="pseudo" class="form-control validate white-text">
            <label data-error="wrong"  data-success="right" for="Form-email5">pseudo</label>
          </div>


          <div class="md-form pb-3">
            <input type="password" id="Form-pass5" name="mdp"  class="form-control validate white-text">
            <label data-error="wrong"  data-success="right" for="Form-pass5">mot de passe</label>
          
          </div>

          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit"  target="_blank" class="btn btn-success btn-block btn-rounded z-depth-1" >Connexion</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">S'inscrire <a href="#" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

</form>
