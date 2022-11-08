# 1. 恰当方程

$$P(x,y)dx+Q(x,y)dy=0$$

若在单连通区域上存在连续的

$$f(x,y)=\frac{\partial P}{\partial y}=\frac{\partial Q}{\partial x}$$

那么有

$$\Phi(x,y)=\int_{(x_0,y_0)}^{(x,y)} P(x,y)dx+Q(x,y)dy=C$$

任取积分路径即可求得通解 $\Phi=C$ 。事实上可以看到条件式即为

$$f(x,y)=\frac{\partial \Phi}{\partial x\partial y}=\frac{\partial \Phi}{\partial y\partial x}$$

关于恰当方程，我们在数分中还会继续讨论。

# 2. 分离变量法

## 2.1. 分离变量

如果方程 $P(x,y)dx+Q(x,y)dy=0$ 可以化作

$$P_x(x)P_y(y)dx+Q_x(x)Q_y(y)dy=0$$

事实上，这不一定是一个恰当方程

$$\frac{P_x(x)}{Q_x(x)}dx+\frac{Q_y(y)}{P_y(y)}dy=0$$

这显然是一个恰当方程，我们得到其 **通积分** 为

$$\int\frac{P_x(x)}{Q_x(x)}dx+\int\frac{Q_y(y)}{P_y(y)}dy=C$$

同时考虑到 $Q_x(x)=0$ 或 $P_y(y)=0$ 的情况，应当补上这两式的解。

## 2.2. 齐次方程

$$\frac {dx}{dt}=f(\frac xt)$$

$$\frac {dx}{dt}=f(\frac {a_1x+b_1t+c_1}{a_2x+b_2t+c_2})$$

# 3. 积分因子法

## 3.1. 线性方程

$$\frac {dx}{dt}+P(t)x=Q(t)$$

伯努利方程

$$\frac {dx}{dt}+P(t)x=Q(t)x^{\alpha}$$

## 1.3. 全微分方程



#### Riccati方程

$$x'=P(t)x^2+Q(t)x+R(t)$$

著名世界难题