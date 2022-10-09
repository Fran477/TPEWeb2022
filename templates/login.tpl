{{include file="header.tpl"}}

<section class="vh-100" style="background-color: #DEFAF5;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/originals/cb/54/de/cb54de8c548de2b932cb4e042e9f545f.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="loginVerify" method="POST" class="from-login">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">3D Print</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en su cuenta</h5>

                  <div class="form-outline mb-4">
                    <input type="name" name="name" id="name" class="form-control form-control-lg" required />
                    <label class="form-label">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name= "password" id="password" class="form-control form-control-lg" required/>
                    <label class="form-label">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>
                </form>
                {if $decline != null}
                <div class="alert alert-danger" role="alert">
                {$decline}
                </div>
                {/if}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{include file="footer.tpl"}}