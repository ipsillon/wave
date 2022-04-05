<section class="precos" id="planos">
@forelse(Wave\Plan::all() as $plan)
@php $features = explode(',', $plan->features); @endphp
          <div class="row justify-content-between">

            <div class="col-md-3 precos__box">

                <h4>{{$plan->name}}</h4>

                <p>{{$plan->description}}</p>

                <span class="preco__mes essential" data-modal-checkout><b>{{$plan->price}}</b>/mes</span>

                <div class="max-w-preco">
                  
                  <div class="d-flex align-items-center gap-3">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                      <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                    </svg>
                    <h6>Home</h6>
                  </div>
                  <div class="preco__line"></div>

                  <div class="d-flex align-items-center gap-3 mt-5">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                      <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                    </svg>
                    <h6>Conheça-nos</h6>
                  </div>
                  <div class="preco__line"></div>

                  <div class="d-flex align-items-center gap-3 mt-5">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                      <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                    </svg>
                    <h6>Ministérios</h6>
                  </div>
                  <div class="preco__line"></div>

                  <div class="d-flex align-items-center gap-3 mt-5">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                      <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                    </svg>
                    <h6>Agenda</h6>
                  </div>
                  <div class="preco__line"></div>

                  
                  <div class="d-flex align-items-center gap-3 mt-5">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                      <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                    </svg>
                    <h6>Usuários Ilimitados</h6>
                  </div>
                  <div class="preco__line"></div>


                  <p class="my-4">Taxa de Setup: 
                    Criação, Implantação e Treinamento. 
                    R$ 399,00 - Pagamento único.</p>


                  <div class="d-flex justify-content-center">
                    <button class="precos__btn essential" data-modal-checkout>
                      Comece agora
                    </button>
                  </div>
                  
                </div>
            </div>

          
          <div class="col-md-3 precos__box">

              <h4>{{$plan->name}}</h4>

              <p>{{$plan->description}}</p>

              <span class="preco__mes transicao melhor" data-modal-checkout>
                <b>{{$plan->price}}</b>/mes

                <span class="melhor__preco">
                  Melhor valor
                </span>
              </span>

              <div class="max-w-preco">
                
                <div class="d-flex align-items-center gap-3">  
                  <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                    <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                  </svg>
                  <h6>Plano Essencial +</h6>
                </div>
                <div class="preco__line"></div>

                <div class="d-flex align-items-center gap-3 mt-5">  
                  <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                    <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                  </svg>
                  <h6>Mídias, Fotos e Vídeos</h6>
                </div>
                <div class="preco__line"></div>

                <div class="d-flex align-items-center gap-3 mt-5">  
                  <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                    <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                  </svg>
                  <h6>"Seja um doador"</h6>
                </div>
                <div class="preco__line"></div>

                <div class="d-flex align-items-center gap-3 mt-5">  
                  <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                    <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                  </svg>
                  <h6>Redes Sociais e Ofertas </h6>
                </div>
                <div class="preco__line"></div>

                
                <div class="d-flex align-items-center gap-3 mt-5">  
                  <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                    <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                  </svg>
                  <h6>Cultos e Eventos</h6>
                </div>
                <div class="preco__line"></div>


                <p class="my-4">Taxa de Setup: 
                  Criação, Implantação e Treinamento. 
                  R$ 999,00 - Pagamento único.</p>


                <div class="d-flex justify-content-center">
                  <button class="precos__btn transicao" data-modal-checkout>
                    Comece agora
                  </button>
                </div>
                
              </div>
          </div>

          <div class="col-md-3 precos__box">

            <h4>{{$plan->name}}</h4>

            <p>{{$plan->description}}</p>

            <span class="preco__mes amplo" data-modal-checkout><b>{{$plan->price}}</b>/mes</span>

            <div class="max-w-preco">
              
              <div class="d-flex align-items-center gap-3">  
                <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                  <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                </svg>
                <h6>Plano Transição +</h6>
              </div>
              <div class="preco__line"></div>

              <div class="d-flex align-items-center gap-3 mt-5">  
                <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                  <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                </svg>
                <h6>Ensino e Congressos</h6>
              </div>
              <div class="preco__line"></div>

              <div class="d-flex align-items-center gap-3 mt-5">  
                <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                  <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                </svg>
                <h6>Células, Grupos Caseiros e PG</h6>
              </div>
              <div class="preco__line"></div>

              <div class="d-flex align-items-center gap-3 mt-5">  
                <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                  <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                </svg>
                <h6>Notícias e Podcasts</h6>
              </div>
              <div class="preco__line"></div>

              
              <div class="d-flex align-items-center gap-3 mt-5">  
                <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                  <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"/>
                </svg>
                <h6>Cultos online</h6>
              </div>
              <div class="preco__line"></div>


              <p class="my-4">Taxa de Setup: 
                Criação, Implantação e Treinamento. 
                R$ 1.199,00 - Pagamento único.</p>


              <div class="d-flex justify-content-center">
                <button class="precos__btn amplo" data-modal-checkout>
                  Comece agora
                </button>
              </div>
              
            </div>
          </div>
      </div>
      </div>
@empty
<div class="row">
  <div class="col-md-12">
    <h3>Nenhum plano encontrado</h3>
  </div>
@endforelse
</section>