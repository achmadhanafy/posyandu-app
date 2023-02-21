</body>
<script src="<?= BASEURL; ?>src/pages/function.js">
 function reload() {
  var head = document.getElementsByTagName('head')[0];
  var script = document.createElement('script');
  script.src = '<?= BASEURL; ?>src/pages/function.js';
  head.appendChild(script);
 }
 reload();
</script>

</html>