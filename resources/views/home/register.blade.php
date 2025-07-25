<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h4 class="text-center">School Management System</h4>
            <h4 class="text-center mb-4">Register</h4>
            <form action="" id="registerForm">
                <!-- Full Name -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Full Name</label>
                </div>
                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Email Address</label>
                </div>
                <!-- User Name -->
                 <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" required>
                        <label for="floatingInputGroup1">Username</label>
                    </div>
                </div>
                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <!-- Register Button -->
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

    <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          🎉 Registration completed successfully!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
      <!-- Bootstrap JS + Script to show modal -->
  <script>
    document.getElementById('registerForm').addEventListener('submit', function (e) {
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