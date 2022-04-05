<div>
    @foreach(Wave\Plan::all() as $plan)
        @php $features = explode(',', $plan->features); @endphp
        
        <div class="container" >
                            
            <div class="col-md-3 precos__box">

                <h4>{{ $plan->name }}</h4>
                
                <p>{{ $plan->description }}</p>
                

                @if($plan->price == 'R$69.90')
                <span class="preco__mes essential" data-modal-checkout><b>{{$plan->price}}</b>/mes</span>

                @elseif($plan->price == 'R$99.90')
                <span class="preco__mes transicao melhor" data-modal-checkout><b>{{$plan->price}}</b>/mes
                <span class="melhor__preco"> 
                Melhor valor
                </span>
                </span>
                

                @else($plan->price == 'R$119.90')
                <span class="preco__mes amplo" data-modal-checkout><b>{{$plan->price}}</b>/mes</span>
                @endif     
            
                <div>
                    <ul class="max-w-preco" style=' list-style-type: none';>
                        @foreach($features as $feature)
                            <li class="relative">
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.648" height="21.852" viewBox="0 0 26.648 21.852">
                                        <path id="Caminho_452" data-name="Caminho 452" d="M79.954,251.043l-4.73-4.725-12.394,12.4-4.795-4.8-4.73,4.731,9.518,9.52.006-.013.015.013Z" transform="translate(-53.306 -246.318)" fill="#073b4c"></path>
                                    </svg>

                                    <span>
                                        {{ $feature }}
                                    </span>
                                    <div class="preco__line"></div>
                                </span>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="d-flex justify-content-center">
                    @if($plan->price == 'R$69.90')
                    <button class="precos__btn essential" data-modal-checkout>
                        Comece agora
                    </button>
                    @elseif($plan->price == 'R$99.90')
                    <button class="precos__btn transicao melhor" data-modal-checkout>
                        Comece agora
                    </button>
                    @else($plan->price == 'R$119.90')
                    <button class="precos__btn amplo" data-modal-checkout>
                        Comece agora
                    </button>
                    @endif
                </div>                 
            </div>         
        </div>
    @endforeach
</div>