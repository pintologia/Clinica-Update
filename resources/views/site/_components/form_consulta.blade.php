<form method="Post" action="{{ route('consulta.store') }}" class="appoinment-form" id="consulta-form">  
                  @csrf
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                              <small>Escolha a consulta ou exame</small>
                              <select class="form-control" id="exampleFormControlSelect1" name="nome_consulta">
                                  <option value="Cardiologia">Cardiologia</option>
                                  <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                                  <option value="Urologia">Urologia</option>
                                  <option value="Ortopedia">Ortopedia</option>
                                  <option value="Gastroenterologia">Gastroenterologia</option>
                                  <option value="Neurologia">Neurologia</option>
                                  <option value="Dermatologia">Dermatologia</option>
                                  <option value="Nutrição">Nutrição</option>
                                  <option value="Psicologia">Psicologia</option>
                                  <option value="Endocrinologia">Endocrinologia</option>
                                  <option value="Ginecologia">Ginecologia</option>
                                  <option value="Planeamento Familiar">Planeamento Familiar</option>
                                  <option value="Infertilidade">Infertilidade</option>
                                  <option value="Estomatologia">Estomatologia</option>
                                  <option value="Holter">Holter</option>
                                  <option value="Medicina Interna">Medicina Interna</option>
                                  <option value="Medicina de Trabalho">Medicina de Trabalho</option>
                                  <option value="Pneumologia">Pneumologia</option>
                                  <option value="Protologia">Protologia</option>
                                  <option value="Puericultura">Puericultura</option>
                                  <option value="Maternidade">Maternidade</option>
                                  <option value="Clinica geral">Clínica geral</option>
                                  <option value="Cirurgia">Cirurgia</option>
                                  <option value="Analises clinicas">Analises clínicas</option>
                                  <option value="Ecografia">Ecografia</option>
                                  <option value="Ecocardiograma">Ecocardiograma</option>
                                  <option value="Radiografia">Radiografia</option>
                                  <option value="Obstetricia">Obstetrícia</option>
                                  <option value="Eletrocardiograma">Eletrocardiograma</option>
                                  <option value="Pediatria">Pediatria</option>
                                </select>
                        {{ $errors->has('nome_consulta') ? $errors->first('nome_consulta') : '' }}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">

                              <small>Nossas Seguradoras</small>
                                <select class="form-control" id="exampleFormControlSelect2" name="tipo_consulta">
                                  <option value="Particular">Fidadelidade</option>
                                </select>
                                {{ $errors->has('tipo_consulta') ? $errors->first('tipo_consulta') : '' }}
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">

                              <small>Parcceiros</small>
                                <select class="form-control" id="exampleFormControlSelect2" name="tipo_consulta">
                                  <option value="Particular">Cobeje</option>
                                  <option value="Particular">Cimangola</option>
                                  <option value="Particular">Quibaia Lopo</option>
                                </select>
                                {{ $errors->has('tipo_consulta') ? $errors->first('tipo_consulta') : '' }}
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <small>Data de marcação</small>
                                <input id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" name="data_consulta" value="{{ old('data_consulta')}}">
                                {{$errors->has('data_consulta') ? $errors->first('data_consulta') : ''}}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <small>Horário desejado para marcação</small>
                                <input  id="time" type="time" class="form-control" placeholder="hora" name="hora" value="{{ old('hora')}}">
                                {{$errors->has('hora') ? $errors->first('hora') : ''}}
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <small>Nome</small>
                                <input name="nome"  type="text" class="form-control" placeholder="Nome completo" value="{{ old('nome') }}">
                                {{$errors->has('nome') ? $errors->first('nome') : ''}}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <small>Contacto</small>
                                <input name="contacto" id="phone" type="text" class="form-control" placeholder="Contacto"  value="{{old('contacto')}}">
                                {{$errors->has('contacto') ? $errors->first('contacto') : ''}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <small>Escreva alguma coisa(opcional)</small>
                        <textarea name="mensagem" id="message" class="form-control" rows="6" placeholder="" value="{{ old('mensagem') }}"> {{$departamento->mensagem ?? '' }}</textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="confirmation.html" onclick="event. preventDefault();
                                                     document.getElementById('consulta-form').submit();">Marcar consulta<i class="icofont-simple-right ml-2"></i></a>
  </form>
            