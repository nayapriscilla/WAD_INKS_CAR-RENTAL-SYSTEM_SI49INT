<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Driver</title>
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
        background-color: #4CAF50;
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
    <h2>Add New Driver</h2>

    <form action="{{ route('drivers.store') }}" method="POST">
      @csrf

      <label>Name:</label>
      <input type="text" name="name" required>

      <label>Age:</label>
      <input type="number" name="age" required>

      <label>Contact Number:</label>
      <input type="text" name="contact_number" required>

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>License Number:</label>
      <input type="text" name="license_number" required>

      <label>Activity Status:</label>
      <select name="activity_status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
        <option value="On Trip">On Trip</option>
      </select>

      <button type="submit" class="btn">Save Driver</button>
    </form>

    <a href="{{ route('drivers.index') }}" class="back-link">Back to Directory</a>
  </div>

</body>
</html>