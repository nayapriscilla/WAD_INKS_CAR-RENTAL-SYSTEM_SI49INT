<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Driver Profile</title>
  <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #ffff;
        padding: 20px;
      }
      .container {
        background-color: #ffff;
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
      }
      h2 {
        text-align: center;
      }
      label {
        font-weight: bold;
        display: block; 
        margin-top: 10px;
      }
      input, select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
      }
      .btn {
        background-color: #ff9800;
        color: white;
        padding: 10px;
        border: none;
        width: 100%;
        margin-top: 15px;
        font-weight: bold;
        cursor: pointer;
      }
      .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #555;
      }
  </style>
</head>
<body>

  <div class="container">
    <h2>Edit Driver Profile</h2>

    <form action="{{ route('drivers.update', $driver->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label>Name:</label>
      <input type="text" name="name" value="{{ $driver->name }}" required>

      <label>Age:</label>
      <input type="number" name="age" value="{{ $driver->age }}" required>

      <label>Contact Number:</label>
      <input type="text" name="contact_number" value="{{ $driver->contact_number }}" required>

      <label>Email:</label>
      <input type="email" name="email" value="{{ $driver->email }}" required>

      <label>License Number:</label>
      <input type="text" name="license_number" value="{{ $driver->license_number }}" required>

      <label>Activity Status:</label>
      <select name="activity_status">
        <option value="Active" {{ $driver->activity_status == 'Active' ? 'selected' : '' }}>Active</option>
        <option value="Inactive" {{ $driver->activity_status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
        <option value="On Trip" {{ $driver->activity_status == 'On Trip' ? 'selected' : '' }}>On Trip</option>
      </select>

      <button type="submit" class="btn">Update Driver</button>
    </form>

    <a href="{{ route('drivers.index') }}" class="back-link">Back to Directory</a>
  </div>

</body>
</html>