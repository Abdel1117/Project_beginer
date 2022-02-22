import turtle

levelsquare = []
xpos = -300
def square(xpos, ypos):
    square = turtle.Turtle()
    square.fillcolor("black")
    square.begin_fill()
    square.speed(0)
    square.setx(xpos)
    square.sety(ypos)
    for side in range(4):
        square.forward(50)
        square.left(90)
    square.end_fill()

    square.hideturtle()
    levelsquare.append(square)


window = turtle.Screen();
window.bgcolor("white")

"""
for i in range(10):
    xpos += 50
    ypos = 0
    square(xpos,ypos)
"""
for x in range(xpos,501,50): square(x,0)
print(levelsquare)



while True:
    window.update()