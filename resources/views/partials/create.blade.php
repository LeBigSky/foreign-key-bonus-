<section>
    <div class="container d-flex flex-column">
        <form action="/member" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name='name'>
                <label class="form-label" for="form1Example1">name</label>
            </div>
            <div class="form-outline mb-4">
                <input type="number" name="age" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Age</label>
            </div>
            <div>
                <select name="gender" id="">
                  @foreach ($genders as $gender )
                    <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                @endforeach  
                </select>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        </form>
    </div>

</section>