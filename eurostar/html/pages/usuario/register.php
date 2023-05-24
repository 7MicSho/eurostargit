<!-- Page CSS -->
<link rel="stylesheet" href="html/temas/eurostartemplate/assets/vendor/css/pages/page-auth.css" />

<body style="overflow: hidden;">
    <div class="row">
        <div class="bg-dark col-12 col-md-7">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card" style="background: rgba(0, 0, 0, .0); -webkit-box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.30); 
                         box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.30); color:white">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="text-center mb-2">
                                <i class='bx bxs-user-circle bx-lg'></i>
                            </div>
                            <!-- /Logo -->
                            <h3 class="mb-2 text-center" style="color: white;">Bienvenido REGISTRO</h4>
                                <p class="mb-4 text-center">Ingresa tu usuario y contraseña</p>

                                <form id="formAuthentication" class="mb-3" action="?modulo=usuario&accion=entrar"
                                    method="post">
                                    <div class="mb-3" style="color: white;">
                                        <input type="text" class="form-control bg-dark" id="email" name="username"
                                            placeholder="Usuario" style="color: white;" autofocus autocomplete="off"
                                            required />
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <div class="d-flex justify-content-between">

                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control bg-dark"
                                                name="password" style="color: white;"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                autocomplete="off" required />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
                                    </div>
                                </form>

                               
                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
        <div class="col-md-5 m-0 p-0 bg-dark">
            <div style="border-radius: 0% 0% 0% 30%; background-image: url(html/image/paintbg.webp); background-size: cover; -webkit-box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.30); 
    box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.30); color:white;">
                <div class="">
                    <div class="authentication-wrapper authentication-basic container-p-y">
                        <div class="justify-content-end p-5" style="width: 100%; margin-top: -55%;">
                            <div class="card" style="background: rgba(0, 0, 0, .1); -webkit-box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.10); 
              box-shadow: 0px 0px 30px 5px rgba(0,0,0,0.10); color:white;">
                                <img src="html\image\logo-eurostar.png" alt="logo" class="m-3" style="margin-top: 20%;">
                                <p>
                                <h4 class="text-center" style="color: white; margin-bottom: 1%;">Soluciones en
                                    recubrimientos</h4>
                                </p>
                            </div>
                            <!-- /Register -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>