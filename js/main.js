// canvas

class canvasDraw {
    constructor(canvas) {
        this.canvas = canvas;
        this.ctx = this.canvas.getContext("2d");
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        /*
        this.xPosRect = xPosRect;
        this.yPosRect = yPosRect;
        this.xRect = xRect;
        this.yRect = yRect;
        this.xText = xText;
        this.yText = yText;

        this.xSpeed = xSpeed;
        this.ySpeed = ySpeed;
        */

        //this.rectArray = [];

        //for (let i = 0; i < 50; i++) {

        this.xPosRect = Math.random() * innerWidth;
        this.yPosRect = Math.random() * innerHeight;
        this.xRect = 100;
        this.yRect = 100;
        this.xText = this.xPosRect + 40;
        this.yText = this.yPosRect + 90;

        this.xSpeed = (Math.random() - 0.5) * 8;
        this.ySpeed = (Math.random() - 0.5) * 8;

        //};

        this.rectArray = [];

        for (let i = 0; i < 5; i++) {
            let rect = {
                xPosRect: Math.random() * innerWidth,
                yPosRect: Math.random() * innerHeight,
                xRect: 100,
                yRect: 100,
                xText: this.xPosRect + 40,
                yText: this.xPosRect + 90,
                xSpeed: (Math.random() - 0.5) * 8,
                ySpeed: (Math.random() - 0.5) * 8
            }
            this.rectArray.push(rect);
        };

        //console.log(rect);
        console.log(this.rectArray);

        //this.rectArray.push(rect);
        //this.rectArray.push(this.animate());
        //this.textDraw();
        this.animate();


    }


    textDraw() {

        this.ctx.beginPath();
        this.ctx.strokeRect(this.xPosRect, this.yPosRect, this.xRect, this.yRect);
        this.ctx.font = "50pt Open sans";
        this.ctx.textBaseline = "up";
        this.ctx.fillStyle = "black";
        this.ctx.fillText("A", this.xText, this.yText);

        /*
                for (let i = 0; i < this.rectArray.length; i++) {
                    this.textDraw(i);
        
                }
        */
    }


    update() {
        if (this.xPosRect + this.xRect > innerWidth || this.xPosRect < 0) {
            this.xSpeed = -this.xSpeed;
        }

        if (this.yPosRect + this.yRect > innerHeight || this.yPosRect < 0) {
            this.ySpeed = -this.ySpeed;
        }

        this.xPosRect += this.xSpeed;
        this.xText += this.xSpeed;

        this.yPosRect += this.ySpeed;
        this.yText += this.ySpeed;

        this.textDraw();

    }


    animate() {
        requestAnimationFrame(this.animate.bind(this));

        this.ctx.clearRect(0, 0, innerWidth, innerHeight);
        //this.update();


        for (let i = 0; i < this.rectArray.length; i++) {
            this.rectArray[i];
            this.update();
        }
    };

}

const canvas = document.querySelector("canvas");

const draw = new canvasDraw(canvas);
