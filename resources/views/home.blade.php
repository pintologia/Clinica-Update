@extends('layouts.admin')

@section('content')
    

    <!-- Sale & Revenue Start -->

    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="bi bi-graph-up-arrow text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Publicações</p>
                                <h6 class="mb-0">{{$quantBlogues}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="bi bi-reception-4 text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Departamentos</p>
                                <h6 class="mb-0">{{$quantDepartamentos}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="bi bi-chat-dots text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Contactos</p>
                                <h6 class="mb-0">{{$quantContacto}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="bi bi-mask text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Consultas</p>
                                <h6 class="mb-0">{{$quantConsulta}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Número de visitas</h6>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calendário</h6>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <!-- Sales Chart End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



@endsection
