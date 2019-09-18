import turtle
t = turtle.Turtle()
t.reset()
t.color("red")
t.pensize(3)
t.speed(500)
t.lt(90)
for i in range(8):
  if(i%2==0):
    for j in range(60):
      t.fd(1)
      t.rt(3)
  else:
    for j in range(60):
      t.fd(1)
      t.lt(3)