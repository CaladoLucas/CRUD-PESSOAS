<div class="container">
    @if(session('success'))
        <p class="alert-success">
            {{ session('success') }}
        </p>
    @endif
    <form action="{{ url('/create_pessoas') }}" method="post">

    {{  csrf_field() }}
    
        <div class="col-lg-3">
            <div>
                <label for="nome">Digite o Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome" class="form-control">
            </div>        
            <div>
                <label for="email">Digite o Email</label>
                <input type="text" name="email" placeholder="Digite o email" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>

