<script>
var input = ['j','a','k','a','r','t','a'];

var duplicates = input.reduce(function(acc, el, i, arr) {
  if (arr.indexOf(el) !== i && acc.indexOf(el) < 0) acc.push(el); return acc;
}, []);

console.log(duplicates);
</script>