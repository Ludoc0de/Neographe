// canvas

class canvasDraw {
    constructor(canvas) {
        this.canvas = canvas;
        this.ctx = this.canvas.getContext("2d");
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        this.textDraw();
    }

    textDraw() {
        this.ctx.strokeStyle = 'blue';
        this.ctx.strokeRect(100, 100, 100, 100);
    }
}

const canvas = document.querySelector("canvas");

const draw = new canvasDraw(canvas);