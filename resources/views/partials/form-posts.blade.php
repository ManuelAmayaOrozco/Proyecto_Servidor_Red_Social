@vite('resources/css/user_styles/register_styles.css')
<main class="main__register">
    <form class="register__register_form {{ $errors->any() ? 'register__register_form-error' : '' }}" action="{{ route('post.doRegisterPost') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" placeholder="Enter title">
            @error('title') <small class="register_form__error">{{ $message }}</small> @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input class="form-control" type="text" name="description" placeholder="Enter description">
            @error('description') <small class="register_form__error">{{ $message }}</small> @enderror
        </div>
        <div class="form-group d-flex justify-content-center gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</main>