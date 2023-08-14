<!DOCTYPE html>
<html>
<head>
  <title>Booking Package with Hotel</title>
</head>
<body>
  <h1>Booking Package with Hotel</h1>
  <form action="process_booking.php" method="post">
    <div>
      <label for="package">Select Package:</label>
      <select name="package" id="package">
        <option value="pune_tour">Pune Tour</option>
        <option value="ratnagiri_tour">Ratnagiri Tour</option>
        <!-- Add more options for different packages -->
      </select>
    </div>
    <div>
      <label for="hotel">Select Hotel:</label>
      <select name="hotel" id="hotel">
        <option value="hotel_a">Hotel A</option>
        <option value="hotel_b">Hotel B</option>
        <!-- Add more options for different hotels -->
      </select>
    </div>
    <div>
      <label for="checkin">Check-In Date:</label>
      <input type="date" name="checkin" id="checkin" required>
    </div>
    <div>
      <label for="checkout">Check-Out Date:</label>
      <input type="date" name="checkout" id="checkout" required>
    </div>
    <input type="submit" value="Book Package">
  </form>
</body>
</html>
