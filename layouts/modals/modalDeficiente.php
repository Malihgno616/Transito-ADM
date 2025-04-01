<!-- Extra Large Modal -->
<div id="edit-deficiente-modal" tabindex="-1" class="animate__animated animate__fadeIn fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-4xl font-medium text-gray-900 dark:text-black">Detalhes do cartão</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-black" data-modal-hide="edit-deficiente-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <form class="max-w-4xl mx-auto">
                <!-- Informações do Beneficiário -->
                 <div class="p-20 m-20">
                  <span class="font-bold">ID:<span id="id-beneficiario" class="text-yellow-700"></span></span>
                </div>
                <h3 class="text-4xl font-medium text-gray-900 dark:text-black text-center mb-7 p-4">
                    Informações do beneficiário
                </h3>
                <div class="grid md:grid-cols-4 md:gap-6 ">
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_email" id="nome-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome do beneficiário</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="date" name="floating_nascimento" id="nascimento-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="dd-mm-yyyy"  />
                      <label for="floating_password" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Data de nascimento</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <select id="genero-beneficiario" name="floating-genero" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value="">Selecione...</option>
                        <?php foreach($array_generos as $generos): ?>
                            <option value="<?= $generos ?>" <?= ($generos == $genero_beneficiario) ? 'selected' : '' ?>>
                                <?= $generos ?>
                            </option>
                        <?php endforeach; ?>
                      </select>
                      <label for="floating_genero" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sexo</label>              
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="end-idoso" id="end-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                      <label for="end-idoso" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Endereço</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="num-endereco-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_complemento" id="complemento-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_complemento" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Complemento</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="bairro-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bairro</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="cep-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CEP</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="cidade-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                       />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cidade</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <select id="uf-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option value=""></option>                    
                        <?php foreach($estados as $uf): ?>
                            <option value="<?= $uf ?>" <?= ($uf == $uf_beneficiario) ? 'selected' : ''?>>
                                <?= $uf ?>
                            </option>
                        <?php endforeach; ?>
                      </select>
                      <label for="uf-idoso" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Estado(UF)</label>  
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="telefone-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="rg-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RG</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="date" name="floating_company" id="expedicao-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Data de Expedição</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="expedido-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expedidor do RG</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="cnh-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nº da CNH (Caso for condutor)</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="date" name="floating_company" id="validade-cnh-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                      <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Validade da CNH</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="floating_company" id="email-beneficiario" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                    <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="number" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="0" readonly/>
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" readonly>Nº do cartão</label>
                  </div> 
                  <div class="relative z-0 w-full mb-5 group">
                      <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="Não Emitido" readonly/>
                      <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" readonly>STATUS</label>
                  </div> 
                </div> 
                <!-- Informações médicas -->
                <h3 class="text-4xl font-medium text-gray-900 dark:text-black text-center mb-7 p-4">Informações do médico</h3>
                <div class="grid md:grid-cols-1 md:gap-6">
                  <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_email" id="nome-medico" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome do médico</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_email" id="registro-crm" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Registro profissional (CRM)</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_email" id="telefone-medico" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                  </div>
                  <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_email" id="local-atendimento" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Local de atendimento (Rua, AV)</label>
                  </div>
                </div>
                <h3 class="text-4xl font-medium text-gray-900 dark:text-black text-center mb-7 p-4">Informações médicas</h3>
                <div class="grid md:grid-cols-1 md:gap-6">
                  <div class="relative z-0 w-full mb-5 group flex flex-col items-center">
                    <h3 class="mb-4 text-gray-900 dark:text-white">O requerente possui deficiência <strong>AMBULATÓRIA</strong>  causada por: </h3>
                      <ul class="w-80 font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-200 dark:border-gray-200 dark:text-white">
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="deficiencia-fisica" type="checkbox" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="deficiencia-fisica" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Deficiência Física</label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="membros-superiores" type="checkbox" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="membros-superiores" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Membro(s) Superior(es) </label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="membros-inferiores" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="membros-inferiores" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Membro(s) Inferior(es) </label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="cadeira-de-rodas" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="cadeira-de-rodas" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Cadeira de Rodas</label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="aparelhagem-ortopedica" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="aparelhagem-ortopedica" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Aparelhagem Ortopédica </label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="protese" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="protese" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Prótese</label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="incapacidade-mental" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="incapacidade-mental" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Incapacidade Mental</label>
                              </div>
                          </li>
                          <li class="w-full rounded-t-lg dark:border-gray-600">
                              <div class="flex items-center ps-3">
                                  <input id="dificuldade-de-locomocao" type="checkbox" value="" class="deficiencias w-4 h-4 accent-yellow-600 bg-yellow-100 border-yellow-300 rounded-sm focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-yellow-700 dark:focus:ring-offset-yellow-700 focus:ring-2 dark:bg-yellow-600 dark:border-yellow-500">
                                  <label for="dificuldade-de-locomocao" class="w-full py-3 ms-2 text-lg font-medium text-gray-900 dark:text-gray-300">Dificuldade de Locomoção</label>
                              </div>
                          </li>
                      </ul>
                    
                  </div> 
                  <h3 class="mt-2 text-4xl font-medium text-gray-900 dark:text-black text-center mb-2 p-4">Período de restrição médica</h3>
                  <div class="grid md:grid-cols-2 md:gap-6">
                      <div class="flex items-center ps-4 p-3 border border-gray-200 rounded-sm dark:border-gray-700">
                          <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-yellow-700 dark:border-gray-600">
                          <label for="bordered-radio-1" class="w-full py-4 ms-2 text-xl font-medium text-gray-900 dark:text-gray-300">Permanente</label>
                      </div>
                      <div class="flex items-center ps-4 p-3 border border-gray-200 rounded-sm dark:border-gray-700">
                          <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-yellow-700 dark:border-gray-600">
                          <label for="bordered-radio-2" class="w-full py-4 ms-2 text-xl font-medium text-gray-900 dark:text-gray-300">Temporário</label>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="floating_nascimento" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="dd-mm-yyyy"/>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Data de início</label>
                      </div>
                      <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="floating_nascimento" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-500 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="dd-mm-yyyy"/>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Data de fim</label>
                      </div>
                    </div>
                    <div class="relative z-0 w-full h-200 group p-10">
                        <textarea
                            id="floating_textarea"
                            rows="4"
                            class="block py-2.5 px-4 w-full text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        ></textarea>
                        <label
                            for="floating_textarea"
                            class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-4 origin-[0] bg-white dark:bg-gray-900 px-1 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >
                          Descrição e CID da lesão que justifique a incapacidade ou dificuldade ambular
                        </label>
                    </div>
                </div>

                <!-- Informações do representante -->
                <h3 class="text-4xl font-medium text-gray-900 dark:text-black text-center mb-7 p-4">Informações do representante</h3>
                  <div class="grid md:grid-cols-4 md:gap-6 ">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_email" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome do representante</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail do representante</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Endereço</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nº</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Complemento</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bairro</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CEP</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cidade</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <select id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option value=""></option>
                            <?php foreach($estados as $uf): ?>
                            <option value="<?= $uf ?>">
                                <?= $uf ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Estado(UF)</label>  
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">RG</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="date" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Data de Expedição</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_company" id="" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-yellow-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-yellow-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expedidor do RG</label>
                    </div>
                  </div>
                  
                  <h3 class="text-4xl font-medium text-gray-900 dark:text-black text-center mb-7 p-4">Documentos</h3>

                  <div class="grid md:grid-cols-4 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                      <img id="rg-idoso" class="w-150 h-150 object-cover rounded-md mx-auto border-2 border-gray-300" alt="RG do Beneficiário">
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-300" id="rg_idoso" type="file">
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                      <img id="rg-idoso" class="w-150 h-150 object-cover rounded-md mx-auto border-2 border-gray-300" alt="RG do Representante">
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-300" id="rg_representante" type="file">
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                      <img id="rg-idoso" class="w-150 h-150 object-cover rounded-md mx-auto border-2 border-gray-300" alt="Comprovante de representante">
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-300" id="comprovante_representante" type="file">
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                      <img id="rg-idoso" class="w-150 h-150 object-cover rounded-md mx-auto border-2 border-gray-300" alt="Atestado médico">
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-300" id="comprovante_representante" type="file">
                    </div>
                  </div>

                  <div class="flex justify-center gap-3 p-6">
                      <button type="button" class="text-xl text-black bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-700 dark:hover:bg-yellow-400 dark:focus:ring-yellow-700 duration-100"><i class="fa-solid fa-floppy-disk"></i>Salvar Alteração</button>
                      
                      <button type="button" class="text-xl text-black bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-700 dark:hover:bg-yellow-400 dark:focus:ring-yellow-700 duration-100"><i class="fa-solid fa-file-circle-plus"></i>Registrar Cartão</button>
                      
                      <button type="button" class="text-xl text-black bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-700 dark:hover:bg-yellow-400 dark:focus:ring-yellow-700 duration-100"><i class="fa-solid fa-print"></i>Imprimir Cartão</button>
                  </div>
              </form>

            </div>
            <!-- Modal separator -->
            <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                
            </div>
        </div>
    </div>
</div>
