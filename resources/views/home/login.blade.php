@extends('home.layout.master')


    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h4 class="text-center">School Management System</h4>
            <h4 class="text-center mb-4">Login</h4>
            <form action="" id="loginForm">
                <!-- Email Address -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <!-- Remember me/Forgot Password -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">
                    Remember me
                    </label>
                </div>
                <a href="register.html" class="small text-decoration-none">Forgot Password?</a>
                </div>
                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100"><i class="fa fa-arrow-circle-right"></i> Login</button>
            </form>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="successModalLabel">Login Successful</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You have logged in successfully!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
    <script>
         document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault(); // Prevent actual form submission

      // Show success modal
      var successModal = new bootstrap.Modal(document.getElementById('successModal'));
      successModal.show();

      // Optional: Reset form
      this.reset();
    });
    </script>
  </body>
</html>