@extends('app.structure.layout.default')

@section('title', 'Social Uniube - Home')

@section('body')
    <home-rede-component inline-template>
        <div class="content">
            <div class="content_left">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/assets/imagens/andre2.jpeg" alt="profile">
                            <span>{{ Auth::user()->first_name }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/imagens/amigos.png" alt="Amigos">
                            <span>Amigos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/imagens/grupo.png" alt="Grupos">
                            <span>Grupos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/imagens/eventos.png" alt="Eventos">
                            <span>Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/assets/imagens/empregos.png" alt="Empregos">
                            <span>Empregos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/rede/inicio/logout">
                            <img src="/assets/imagens/btn_sair.png" style="width: 30px; height: 30px; margin-left:5px;" alt="Empregos">
                            &nbsp;&nbsp;<span>Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content_center">
                <div class="stories">
                    <img src="https://picsum.photos/id/137/110/200" alt="">
                    <img src="https://picsum.photos/id/237/110/200" alt="">
                    <img src="https://picsum.photos/id/522/110/200" alt="">
                    <img src="https://picsum.photos/id/522/110/200" alt="">
                </div><!--stories--> 
                <div class="media_container">
                    <div class="share">
                        <form action="/rede/home/salvar" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="image">Imagem do Evento:</label>
                                <input type="file" id="image" name="image" class="from-control-file">
                                <button type="submit">
                                    Salvar publicacao
                                </button>
                            </div>
                            <div class="share_upSide">
                                <img src="/assets/imagens/andre.jpeg" alt="profile">
                                <input id="descricao" name="descricao" type="text" placeholder="O que está pensando nesse momento, {{ Auth::user()->first_name }}?">
                            </div>
                        </form>
                        <div class="share_downSide">
                            <div class="share_downSide_link">
                                <i class="fas fa-video live-video-icon"></i>
                                <span>Ao vivo</span>
                            </div>
                            <div class="share_downSide_link">
                                <i class="fas fa-photo-video photo-video-icon"></i>
                                <span>Video e fotos</span>
                            </div>
                            <div class="share_downSide_link">
                                <i class="far fa-grin-alt feeling-icon"></i>
                                <span>Atividades Compatilhadas</span>
                            </div>
                        </div>
                    </div>
                    @foreach($publicacoes as $publicacao)
                        <div class="news_feed">
                            <div class="news_feed_title">
                                <img src="/assets/imagens/andre2.jpeg" alt="user">
                                <div class="news_feed_title_content">
                                    <p>{{ $publicacao->user->first_name }}</p>
                                    <span>{{ $publicacao->created_at }}<i class="fas fa-globe-americas"></i></span>
                                </div>
                            </div>
                            <div class="news_feed_description">
                                <p class="news_feed_subtitle">
                                    {{ $publicacao->descricao }}
                                </p>
                                <img src="/img/events/{{ $publicacao->dir_img_capa }}" alt="">
                            </div>
                        </div>
                        <div class="likes_area">
                            <div class="emojis">
                                <img src="/assets/imagens/like.png">
                                <img src="/assets/imagens/amei.png">
                                <span>25</span>
                            </div>
                            <div class="comment_couts">
                                <span>4 Comentários</span>
                                <span>2 Compartilhamentos</span>
                            </div>
                        </div>
                        <div class="likes_buttons">
                            <div class="likes_buttons_links">
                                <i class="far fa-thumbs-up"></i>
                                <span>Curti</span>
                            </div>
                            <div class="likes_buttons_links">
                                <i class="far fa-comment-alt"></i>
                                <span>Comentar</span>
                            </div>
                            <div class="likes_buttons_links">
                                <i class="fas fa-share"></i>
                                <span>Compartilhar</span>
                            </div>
                        </div>
                    @endforeach
                    <div class="divider"></div>
                </div>
            </div><!--content_center--> 
            <div class="content_right"></div>
        </div> <!--content--> 
    </home-rede-component>
@endsection