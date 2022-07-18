<x-layout>

    @include ('user.user_nav')
    
    <form action="/validate" method="POST" class="m-auto w-50 mt-5">
        @csrf
    
        <div class="mb-3 row">
          <label for="name" class="form-label col-4">Name</label>
          <input type="text" name="name" class="col-8" required>
        </div>
    
        <div class="mb-3 row">
          <label for="email" class="form-label col-4">Email Address</label>
          <input type="email" name="email" aria-describedby="emailHelp" class="col-8" required>
        </div>
    
        <div class="mb-3 row">
          <label for="password" class="form-label col-4">Password</label>
          <input type="password" name="password" class="col-8" required>
        </div>
        
        <div style="display:flex; justify-content: flex-end;">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    
    </x-layout>