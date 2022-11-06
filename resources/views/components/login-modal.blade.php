<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    Login
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/login" method="POST" class="d-flex">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control form-control-sm" name="email" type="email"
                            placeholder="Masukan Email Disini">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control form-control-sm" name="password" type="password"
                            placeholder="Masukan Password Disini">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
