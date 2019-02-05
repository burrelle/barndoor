<form method="POST" action="/horses" enctype="multipart/form-data">
    @csrf
    <label for="name">
        Name
        <input type="text" name="name" id="name" />
    </label>
    <label for="gender">
        Gender
        <select name="gender" id="gender">
            <option value="mare">Mare</option>
            <option value="gelding">Gelding</option>
            <option value="stallion">Stallion</option>
        </select>
    </label>
    <label for="breed">
        Breed
        <input type="text" name="breed" id="breed" />
    </label>
    <label for="color">
        Color
        <input type="text" name="color" id="color" />
    </label>
    <label for="height">
        Height
        <input type="text" name="height" id="height" /> hh
    </label>
    <button type="submit">Submit</button>
</form>
