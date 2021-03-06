var links = [];
var casper = require('casper').create();

function getLinks() {
  var links = document.querySelectorAll('h3.r a');
  return Array.prototype.map.call(links, function(e) {
    return e.getAttribute('href');
  });
}

casper.start('http://google.dk/', function() {
  // search for 'casperjs' from google form
  this.fill('form[action="/search"]', { q: 'Inzite Media & Marketing' }, true);
});

casper.then(function() {
  // aggregate results for the 'phantomjs' search
  links = links.concat(this.evaluate(getLinks));
});

casper.run(function() {
  // echo results in some pretty fashion
  this.echo(links.length + ' links found:');
  this.echo(' - ' + links.join('\n - ')).exit();
});
