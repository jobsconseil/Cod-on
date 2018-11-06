@extends('Layout.Front')

@section('content')
    <!-- Start top-section Area -->
    <section class="top-section-area pb-50 pt-50">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-uppercase text-white mb-20">Rediger un article</h1>
                    <p class="text-white">

                    </p>
                </div>
                <div class="col-lg-4 top-right">
                    <ul>
                        <li><a href="{{route('accueil')}}">Accueil</a><span class="lnr lnr-arrow-right"></span></li>
                        <li><a href="{{route('blog')}}">Blog</a><span class="lnr lnr-arrow-right"></span></li>
                        <li><a href="#">Redaction</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->
    <!-- Start page-content Area -->
    <section class="page-content-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-20">
                        {!! Form::open(['url' => route('blog.store'), 'class' => 'form-area']) !!}
                            <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                {!! Form::label('titre', 'Titre de l\'article', ['class' => 'text-uppercase mt-10']) !!}
                                {!! Form::text('titre', old('titre'), ['class' => 'form-control', 'placeholder' => 'Titre de l\'article', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Titre de l\'article'", 'required']) !!}
                                @if( $errors->has('titre'))
                                    @component('Layout.error')
                                        {{$errors->first('titre')}}
                                    @endcomponent
                                @endif
                            </div>
                            <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
                                {!! Form::label('categorie', 'Categorie de l\'article', ['class' => 'text-uppercase mt-10']) !!}
                                {!! Form::text('categorie', old('titre'), ['class' => 'form-control', 'placeholder' => 'Categorie de l\'article', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Categorie de l\'article'", 'required']) !!}
                                @if( $errors->has('categorie'))
                                    @component('Layout.error')
                                        {{$errors->first('categorie')}}
                                    @endcomponent
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                                        {!! Form::label('contenu', 'Votre Article', ['class' => 'text-uppercase mt-10']) !!}
                                        {!! Form::textarea('contenu', old('contenu'), ['class' => 'form-control', 'placeholder' => 'Le contenu de votre article', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                        @if( $errors->has('contenu'))
                                            @component('Layout.error')
                                                {{$errors->first('contenu')}}
                                            @endcomponent
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group {!! $errors->has('picture') ? 'has-error' : '' !!}">
                                        <label for="photo">Photo :</label>
                                        {!! Form::file('picture',  null, ['class' => 'form-control']) !!}
                                        @if( $errors->has('picture'))
                                            @component('Layout.error')
                                                {{$errors->first('picture')}}
                                            @endcomponent
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type='submit' class='btn btn-finish btn-success text-uppercase' name='publier' value='Publier' />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-content Area -->
@endsection