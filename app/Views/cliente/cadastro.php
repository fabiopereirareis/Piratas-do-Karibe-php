<div class="container py-3">
    <!--form-->
    <form class="row g-3 needs-validation" action="validacao_cadastro.jsp" method="post" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input type="text" class="form-control" id="inputName" value="" name="firstname" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="inputLastName" value="" name="lastname" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Usuário</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="inputUser" aria-describedby="inputGroupPrepend" name="user" required />
                <div class="valid-feedback">Campo preenchido corretamente</div>
                <div class="invalid-feedback">Por favor preencha o campo</div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword" value="" name="password" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="inputEmail" value="" name="email" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="inputAddress" name="address" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="inputDistrict" name="district" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity" name="city" required />
            <div class="valid-feedback">Campo preenchido corretamente</div>
            <div class="invalid-feedback">Por favor preencha o campo</div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select class="form-select" id="inputState" name="state" required>
                <option selected disabled>Selecione...</option>
                <option value="Acre (AC)">Acre (AC)</option>
                <option value="Amapá (AP)">Amapá (AP)</option>
                <option value="Amazonas (AM)">Amazonas (AM)</option>
                <option value="Bahia (BA)">Bahia (BA)</option>
                <option value="Ceará (CE)">Ceará (CE)</option>
                <option value="Distrito Federal (DF)">Distrito Federal (DF)</option>
                <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                <option value="Goiás (GO)">Goiás (GO)</option>
                <option value="Maranhão (MA)">Maranhão (MA)</option>
                <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                <option value="Mato Grosso do Sul (MS)">
                    Mato Grosso do Sul (MS)
                </option>
                <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                <option value="Pará (PA)">Pará (PA)</option>
                <option value="Paraíba (PB)">Paraíba (PB)</option>
                <option value="Paraná (PR)">Paraná (PR)</option>
                <option value="Pernambuco (PE)">Pernambuco (PE)</option>
                <option value="Piauí (PI)">Piauí (PI)</option>
                <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                <option value="Rio Grande do Norte (RN)">
                    Rio Grande do Norte (RN)
                </option>
                <option value="Rio Grande do Sul (RS)">
                    Rio Grande do Sul (RS)
                </option>
                <option value="Rondônia (RO)">Rondônia (RO)</option>
                <option value="Roraima (RR)">Roraima (RR)</option>
                <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                <option value="São Paulo (SP)">São Paulo (SP)</option>
                <option value="Sergipe (SE)">Sergipe (SE)</option>
                <option value="Tocantins (TO)">Tocantins (TO)</option>
            </select>
            <div class="invalid-feedback">Selecione um estado válido</div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Cep</label>
            <input type="text" class="form-control" id="inputZipCode" name="zipcod" required />
            <div class="invalid-feedback">CEP inválido</div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkTerms" required />
                <label class="form-check-label" for="invalidCheck">
                    Aceito os termos.
                </label>
                <div class="invalid-feedback">
                    Para se cadastrar você deve aceitar os termos.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" id="btn_submit">Cadastrar</button>
        </div>
    </form>
    <!--form-->
</div>