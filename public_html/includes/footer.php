<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fetch/1.0.0/fetch.min.js"></script>
<script type="text/javascript" src="js/figlet.js"></script>
<script>

    //figlet github: https://github.com/patorjk/figlet.js
    //Playground: http://patorjk.com/software/taag/#p=display&f=Graffiti&t=Type%20Something%20
    figlet('<?php echo PAGE=='index'?'Welcome!':ucwords(PAGE); ?>', 'Standard', function(err, text) {
        if (err) {
            //console.log('something went wrong...');
            //console.dir(err);
            return;
        }
        console.log(text);
    });

</script>
</body>
</html>
