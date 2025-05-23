<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index_estilo.css">
</head>
<body>
    <div class="container">
        <form action="processa.php" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
               <input type="email" id="form2Example1" class="form-control" name="email"/>
               <label class="form-label" for="form2Example1">Email</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
               <input type="password" id="form2Example2" class="form-control" name="senha" />
               <label class="form-label" for="form2Example2">Senha</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
               <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                        <label class="form-check-label" for="form2Example34"> lembre-se de mim</label>
                    </div>
               </div>

                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Esqueceu a Senha?</a>
                </div>
            </div>

            <!-- Submit button -->
            <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
            <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in">

            <!-- Register buttons -->
           <div class="text-center">
               <p>Não é membro ?<a href="#!">Registra-se</a></p>
               <p>ou entre com:</p>
               <a href="https://www.facebook.com/?locale=pt_BR">
                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-facebook-f">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                       <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                     </svg>
                    </i>
                </button>
                </a>
                <a href="https://www.google.com.br/?hl=pt-BR">
                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                  <i class="fab fa-google">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                     <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                   </svg>
                  </i>
                </button>
                </a>
              <a href="https://x.com/?lang=pt">
               <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                 <i class="fab fa-twitter">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                     <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                   </svg>
                 </i>
               </button>
              </a>
              <a href="https://github.com">
               <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                   <i class="fab fa-github">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                       <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                      </svg>
                   </i>
               </button>
              </a>
            </div>
        </form>
    </div>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>