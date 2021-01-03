var nodemailer = require('nodemailer');
var express = require('express');

var app = express();

var smtpTransport = nodemailer.createTransport({
    service: "gmail",
    host: "smtp.gmail.com",
    auth: {
        user: "",
        pass: ""
    }
});
app.listen(3000, ()=>{
    console.log('server started')
});

app.use(express.static(__dirname))
app.get('/', (req, res) => {
    res.sendFile(__dirname+'/index.html');
});

app.get('/send', (req, res) => {
    var mailOptions={
        to : '',
        subject : 'Query Received',
        text : req.query.to+' asks '+req.query.text
    }
    smtpTransport.sendMail(mailOptions, function(error, response){
        if(error){
            res.end("error");
        }else{
            smtpTransport.sendMail({to:req.query.to, subject:'Finanziell Query Submitted', text:'Your query has been received and will get back to you as soon as possible'}, function(error, response){
                if(error){
                    res.end('error');
                }else{
                    res.end('sent');
                }            
            });
        res.end("sent");
        }
    });
});