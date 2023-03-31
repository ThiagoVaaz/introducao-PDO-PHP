<h2>Cadastrar usuário</h2>

<form action="/user_store" method="POST" role="form">
    <legend>Cadastro</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="name">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" placeholder="password">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>