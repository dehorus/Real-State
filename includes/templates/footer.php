<footer class="footer">
        <div class="container">
            <nav class="nav">
                <a href="/">Home</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a>
                <a href="sales.php">Sales</a>
            </nav>
            <div class="logo">
                <a class="logo-img" href="/">
                    <img src="/build/img/svg/logomark.svg" alt="logomark">
                </a>
                <a class="logo-text" href="/">
                    <h2> Real State </h2>
                </a>
            </div>
            
        </div>

        <?php 
            $fecha = date('y');
        ?>
        <p>Todos los derechos reservados, angel.dev <?php echo $fecha;  ?> &copy;</p>
    </footer>
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>