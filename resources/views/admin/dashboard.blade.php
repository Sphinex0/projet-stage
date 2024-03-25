@extends("layouts.compte-layout")

@section("css/js links")

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
    
        <link rel="stylesheet" href="https://unpkg.com/ag-grid/dist/styles/ag-grid.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />
        
        <!-- Load ag-Grid scripts -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
        <!-- Load Excel export module -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise/dist/ag-grid-enterprise.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section("content")
    
            <div class="container p-4">
                <div class="container-fluid ">
                    <div class="mb-3 w-100 px-2">
                        <h3 class="fw-bold fs-4 mb-3">Dashboard :</h3>
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 blau border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$diplomesCount}}
                                            
                                            <img src="../../../page_admin_image/FileEarmarkPerson.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p class="text-center bg-primary border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 grun border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$usersCount}}
                                            
                                            <img src="../../../page_admin_image/PersonCircle.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            comptes
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #804228;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 gelb border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$averageMoyenne}}
                                            
                                            <img src="../../../page_admin_image/BarChartFill.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #523326;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                         
                       
                        </div>
                    
                       
                        <div class="container-fluid " style="margin-top: 10rem;">
                            <div class="mb-3 w-100 px-2">
                                <div class="row d-flex justify-content-evenly">
                                    <div class="col-lg-6 col-md-6 ">
                                       
                                        <canvas id="my-chart"></canvas>
                                     
                                  </div>
                                        <div class="col-lg-3 col-md-3 ">
                                       
                                            <canvas id="my-cirle"></canvas>
                                         
                                      </div>
                                      
                                    </div>
                                
                                 
                               
                                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../../../../../page_admin_script/script.js"></script>

</body>
</html>

<script>
    let ctx=document.getElementById('my-chart').getContext('2d')
    let data={
        labels:['2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'],
        datasets:[
            {
                labels:'ventes',
                data:[
                    12,15,14,16,13,
                ],
                backgroundColor:'rgba(0,123,255,0.5)',
                borderColor:'rgba(0,123,255,1)',
                borderWidth:3
            }
        ]
    }
    let myChart=new Chart(ctx,{
        // type:"bar",
        // type:"bar",
    //     type:"line",

    //     data:data,
    // options:{
    //     responsive:true,
    //     scales:{
    //         y:{
    //             beginAtZero:true
    //         }

    //     }
    // }
    type: 'bar',
  data: data,
  options: {
    
    responsive:true,
    plugins: {
      filler: {
        propagate: false,
      },
      title: {
        display: true,
        text: (ctx) => 'Moyenne de bac: ' + ctx.chart.data.datasets[0].fill
      }
    },
    interaction: {
      intersect: false,
    }
  },
    })
</script>
<script>
    let ctxe=document.getElementById('my-cirle').getContext('2d')

    let datas={
        labels:['autre','Maroccain'],

        datasets:[
            {
                labels:'ventes',
                data:[
                    4.6,95.4
                ],
                backgroundColor:'rgba(0,123,255,1)',
                borderColor:'rgba(0,56,255,1)',
                borderWidth:3
            }
        ]
    }
    let myCharte=new Chart(ctxe,{
   
    type: 'doughnut',
  data: datas,
  options: {
    plugins: {
      filler: {
        propagate: false,
      },
      title: {
        display: true,
        text: (ctxe) => 'Nationalité: ' + ctxe.chart.data.datasets[0].fill
      }
    },
    interaction: {
      intersect: false,
    }
  },
    })
</script
@endsection