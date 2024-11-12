
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">
        <p>"Two key ingredients in any successful chef : a quick learner and someone with a sharp brain."</p>
    </div>

    <div class="copyrights">
        <p>&copy; <?php echo date('Y') ?> Benjamin Becker<br>BTS SIO Lycée Emile Peytavin, Mende</p>
    </div>

</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
