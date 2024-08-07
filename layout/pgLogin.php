<body>

    <!-- TELA DE LOGIN -->
    <div class="container text-center shadow-lg" style="height: 100%; max-width: 600px; margin: 60px auto; background: linear-gradient(to left, #F2B8B8, #B3E0E6);">
        <div class="row">
            <div class="col-12 bg-main fw-bold text-light mb-5 p-3 h1">
                LOGIN
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7 mb-5">
                <!-- FORMULÁRIO -->
                <form action="admin.php?page=login" method="POST">
                    <div class="d-grid gap-2 mt-4 mb-3 text-start">
                        <label for="userInput" class="form-label text-black fs-5">NOME DE USUÁRIO</label>
                        <input type="text" class="form-control bg-light p-2" id="userInput" maxlength="20" placeholder="Usuário" name="username">
                    </div>
                    <div class="d-grid gap-2 mb-5 text-start">
                        <label for="passwordInput" class="form-label text-black fs-5">SENHA</label>
                        <input type="password" class="form-control bg-light p-2" id="passwordInput" maxlength="20" placeholder="Senha" name="password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-transition fw-bold">ENTRAR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <button type="button" class="btn btn-link link-transition" data-bs-toggle="modal" data-bs-target="#exampleModal">Ainda não tem acesso? Cadastre-se!</button><br>
                <button type="button" class="btn btn-link link-transition">Esqueci minha senha</button>
            </div>
        </div>    
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content px-5">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="cadastro_usuario.php" method="POST">
                    <div class="modal-body">
                        <div class="row">

                            <div class="mb-3">
                                <label for="inputNome" class="form-label">
                                    <i class="fa fa-address-card"></i> Nome Completo
                                </label>
                                <input type="text" class="form-control" id="inputName" name="cd_nome" minlength="4" required>                        
                            </div>
                        
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">
                                    <i class="fa fa-envelope"></i> Email
                                </label>
                                <input type="email" class="form-control" id="inputEmail" name="cd_email" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputPass" class="form-label">
                                    <i class="fa fa-key"></i> Senha
                                </label>
                                <input type="password" class="form-control" id="inputPass" name="cd_password" minlength="4" required>                        
                            </div>

                            <div class="mb-3">
                                <label for="inputPassConf" class="form-label">
                                    <i class="fa fa-check"></i> Conf. de Senha
                                </label>
                                <input type="password" class="form-control" id="inputPassConf" name="cd_passconf" minlength="4" required>                        
                            </div>

                            <div class="mb-3">
                                <label for="inputCpf" class="form-label">
                                    <i class="fa fa-id-card-clip"></i> CPF
                                </label>
                                <input type="text" class="form-control" id="inputCpf" name="cd_cpf" minlength="14" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputState" class="form-label">
                                    <i class="fa fa-map"></i> Estado
                                </label>
                                <select class="form-select" id="inputState" name="state">
                                    <option value="" selected>...</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="inputContact" class="form-label">
                                    <i class="fa fa-phone"></i> Telefone/Contato
                                </label>
                                <input type="text" class="form-control" id="inputContact" minlength="15" name="cd_contact">                        
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-outline-success">Criar Usuario</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>