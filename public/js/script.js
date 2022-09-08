$('#datepicker').datepicker();
      $('#datepicker').on('changeDate', function() {
          $('#my_hidden_input').val(
              $('#datepicker').datepicker('getFormattedDate')
          );
          const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
          let day = $("#datepicker").datepicker("getDate");
          document.getElementById("hari").innerHTML = days[day.getDay()];
          document.getElementById("tanggal").innerHTML = months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
      });
      $('#jam9').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam10').click(function (e) {
          $('#jam9').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam11').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam9').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam12').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam9').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam13').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam9').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam14').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam9').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam15').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam9').removeClass('active');
          $('#jam16').removeClass('active');
      });
      $('#jam16').click(function (e) {
          $('#jam10').removeClass('active');
          $('#jam11').removeClass('active');
          $('#jam12').removeClass('active');
          $('#jam13').removeClass('active');
          $('#jam14').removeClass('active');
          $('#jam15').removeClass('active');
          $('#jam9').removeClass('active');
      });
      $('#1-taman').click(function (e) {
          $('#2-taman').removeClass('active');
          $('#banyak-taman').removeClass('active');
      });
      $('#2-taman').click(function (e) {
          $('#1-taman').removeClass('active');
          $('#banyak-taman').removeClass('active');
      });
      $('#banyak-taman').click(function (e) {
          $('#2-taman').removeClass('active');
          $('#1-taman').removeClass('active');
      });
      $('#tema').click(function (e) {
          $('#tema2').removeClass('active');
          $('#tema3').removeClass('active');
      });
      $('#tema2').click(function (e) {
          $('#tema1').removeClass('active');
          $('#tema3').removeClass('active');
      });
      $('#tema3').click(function (e) {
          $('#tema1').removeClass('active');
          $('#tema2').removeClass('active');
      });
      $('#luas1').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas2').click(function (e) {
          $('#luas1').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas3').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas1').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas4').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas1').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas5').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas1').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas6').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas1').removeClass('active');
          $('#luas7').removeClass('active');
      });
      $('#luas7').click(function (e) {
          $('#luas2').removeClass('active');
          $('#luas3').removeClass('active');
          $('#luas4').removeClass('active');
          $('#luas5').removeClass('active');
          $('#luas6').removeClass('active');
          $('#luas1').removeClass('active');
      });