@extends("layouts.layout")




@section("content")
    

    <div class="container-fluid">
        <div class="row py-5">
            <!-- Hero content on the left -->
            <div class="col-md-5   mx-5 pt-3">
                <div id="hero" class="container">
                    <h1 class="display-4">Bienvenue <span class="keyword"> à l'ENSAO </span>!</h1>
                    <p class="lead" >Découvrez l'excellence de notre école <span class="keyword"> d'ingénieurs</span> renommée où l'innovation et la communauté se rencontrent. </p><br><p class="lead">

                        Préparez-vous à un avenir brillant avec nos programmes de pointe et nos opportunités de carrière stimulantes.</p><br><p class="lead">
                        
                        Explorez nos projets de recherche passionnants et rejoignez une communauté dynamique dédiée à façonner l'avenir de l'ingénierie.
                        
                        Ensemble, construisons le futur à <span class="keyword"> l'ENSAO</span>.</p>
                    
                        <script src="app.js"></script>
                </div>
            </div>

           
        </div>
        <div class="row justify-content-center ">
            <div class="col-auto ">
                <a href="#formations" >
                <img src="images/vector.svg" class="animate__animated animate__bounce" alt=""></a>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col flex-fill title mx-4">
                
                <p class="h3 text-light px-2 py-1 wow animate__animated animate__fadeInLeft" id="formations">À propos</p>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col mt-2 lead">
            L'École Nationale des Sciences Appliquées d'Oujda (<span class="keyword">ENSAO</span>) est un établissement d'enseignement supérieur spécialisé dans la formation d'ingénieurs.

                Notre mission est de fournir une éducation d'excellence, de promouvoir la recherche et l'innovation, et de contribuer au développement socio-économique de la région et du pays.
                
                Nous nous engageons à l'excellence académique, à l'intégrité, à la diversité, et au service à la communauté.
            </div>
          </div>
            <div class="row h-50 mt-5">
              <div class="col-sm-4">
                <div class="card h-100 mb-4 wow animate__animated animate__fadeInLeft ">
                  <div class="card-body">
                    <h5 class="card-title text-center">Nos formations</h5>
                    <p class="card-text text-justify">L'ENSAO propose une gamme diversifiée de programmes d'ingénierie de haute qualité:</p>
                    <ul>
                      <li>Ingénierie Informatique</li>
                      <li>Génie Civil</li>
                      <li>Génie Électrique</li>
                      <li>Génie Mécanique</li>
                    </ul>
                  </div>
                    <a href="#" class="btn btn-outline-primary mx-5 my-2 rounded-0 d-flex justify-content-center">Voir plus</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card h-100 mb-4 wow animate__animated animate__fadeInUp">
                  <div class="card-body">
                    <h5 class="card-title text-center">Admission</h5>
                    <p class="card-text text-justify">Les candidats doivent avoir un diplôme du baccalauréat scientifique et passer un concours d'admission.</p>
                    <p>Les inscriptions sont ouvertes du mois de juin au mois d'août. Le concours d'admission a lieu en septembre.</p>
                  </div>
                    <a href="#" class="btn btn-outline-primary d-flex mx-5 my-2 rounded-0 justify-content-center">S'inscrire</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card h-100 mb-4 wow animate__animated animate__fadeInRight">
                  <div class="card-body">
                    <h5 class="card-title text-center">Espace étudiant</h5>
                    <p class="card-text text-justify">Consultez et modifiez vos inscriptions selon vos besoins.</p>
                  </div>
                  
                    <a href="#" class="btn btn-outline-primary d-flex mx-5 my-2 rounded-0 justify-content-center">Login</a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row mt-5 ">
              <div class="col flex-fill title mx-4">
                  
                  <p class="h3 text-light px-2 py-1 wow animate__animated animate__fadeInLeft" id="formations">Formations</p>
              </div>
          </div>
    </div>
    
    @endsection