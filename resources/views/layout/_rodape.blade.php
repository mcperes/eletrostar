
        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
          var diaSemana = [ 'Domingo', 'Segunda-Feira', 'Terca-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado' ];
          var mesAno = [ 'Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro'           , 'Dezembro' ];
          var data = new Date();
          var hoje = diaSemana[data.getDay()] + ', ' + mesAno[data.getMonth()] + ' de ' + data.getFullYear();
          $("#dataPesquisa").attr("value", hoje);
          $(".datepicker").pickadate({
            monthsFull: mesAno,
            monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
            weekdaysFull: diaSemana,
            weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
            weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
            selectMonths: true,
            selectYears: true,
            clear: false,
            format: 'dddd/mm/yyyy',
            today: "Hoje",
            close: "X",
            min: new Date(data.getFullYear() - 1, 0, 1),
            max: new Date(data.getFullYear() + 1, 11, 31),
            closeOnSelect: true
          });

          $("#dataPesquisa").click(function (event) {
              event.stopPropagation();
              $(".datepicker").first().pickadate("picker").open();
          });

        </script>        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var options = document.querySelectorAll('option');
                var instances = M.FormSelect.init(elems, options);
                var elems = document.querySelectorAll('.datepicker');
                
                var instances = M.Datepicker.init(elems, options);
   
            });
        
            $(document).ready(function(){
                $('select').material_select();
                $('.sidenav').sidenav();
                M.AutoInit();


            });
        </script>
        <script>
$('.datepicker').pickadate({
    selectMonths: true, // Enable Month Selection
    selectYears: 10, // Creates a dropdown of 10 years to control year
    format: 'd/m/yyyy',
  });
</script>

    </body>
  </html>


  