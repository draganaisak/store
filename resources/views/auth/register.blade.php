<h1>
    Register
</h1>
<form method="POST" action="/register">
    @csrf
    <div class="mb-3">
         <label for="name" class="form-label">Username</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
        >
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            class="form-control"
        >
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            class="form-control"
        >
    </div>
    <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="form-control"
            >
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>