

    
    <footer class="site-footer">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Created By: Diaz Torres Daniel - 2019601904 - 3NM40</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="github" href="https://github.com/DDTORRES055/Catalogo" target="_blank"><i class="fa fa-github"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/daniel-d%C3%ADaz-torres-44972b189/" target="_blank"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const llenarModalEdit = async (id) => {
            const response = await fetch(`./database/search.php?id=${id}`);
            const datos = await response.json();

            const edit_title = document.getElementById('edit-title');
            const edit_description = document.getElementById('edit-description');
            const edit_id = document.getElementById('edit-id');

            edit_id.value = id;
            edit_title.value = datos.title;
            edit_description.value = datos.description;
        };

        const llenarModalDelete = async (id) => {
            const response = await fetch(`./database/search.php?id=${id}`);
            const datos = await response.json();

            const delete_title = document.getElementById('delete-title');
            const delete_id = document.getElementById('delete-id');

            delete_id.value = id;
            delete_title.innerText = datos.title;
        };
    </script>

</body>
</html>