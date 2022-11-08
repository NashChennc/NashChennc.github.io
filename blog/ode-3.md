# 1. 初值问题的存在唯一性定理

## $\rm Peano$ 定理

如果初值问题

$$\begin{cases}\dfrac {dx}{dt}=f(t,x)\\x(t_0)=x_0\end{cases}$$

满足 $f(t,x)$ 在闭矩形区域 $\overline R:\{(t,x):|t-t_0|\leq a,|x-x_0|\leq b\}$ 内是 **连续** 的，则该初值问题

在区间

$$|t-t_0|\leq h=\min\{a,\frac bM\},\quad M=\sup_{(t,x)\in\overline R}|f(t,x)|=\sup_{(t,x)\in\overline R}|\frac {dx}{dt}(t,x)|$$

上存在连续可微解 $x=\varphi(t)$。

$x$ 可以是向量。

不证。

## $\rm Lipschitz$ 条件

如果函数 $f(t,x)$ 在区域 $D\subset\mathbb R\times\mathbb R^n$ 内存在常数 $L\geq 0$ 满足不等式

$$|f(t,x_1)-f(t,x_2)|\leq L|x_1-x_2|$$

则称 $f(t,x)$ 在 $D$ 上满足 **$\rm Lipschitz$ 条件**，$L$ 称为 **$\rm Lipschitz$ 常数**

判断 $\rm Lipschitz$ 条件的常用充分条件

* $\nabla_x f(t,x)$ 在 $D$ 上存在且有界，根据 $\rm Lagrange$ 中值定理可得
* $\nabla_x f(t,x)$ 在闭区域 $D$ 上连续

$x_1,x_2$ 可以是向量。

## $\rm Picard$ 定理

在 $\rm Peano$ 定理限定的区域内满足 $\rm Lipschitz$ 条件的函数的初值问题存在唯一解。形式化地，



### 证明1 皮卡序列法

$$x(t)=x_0+\int_{t_0}^tf(s,x(s))ds$$

我们从 $x_0$ 开始，迭代计算上式，构造出 $\rm Picard$ 序列

$$x_0(t)=x_0,\quad x_k(t)=x_0+\int_{t_0}^tf(s,x_{k-1}(s))ds$$

由于

$$|x_k(t)-x_0|=|\int_{t_0}^tf(s,x_{k-1}(s))ds|\leq M|t-t_0|$$

数归得 $x_k(t)\in C^1(D)$

根据 $\rm Peano$ 定理的限制 $|t-t_0|\leq h=\min\{a,\dfrac bM\}$ （事实上很有可能就是为此设计的），有

$$M|t-t_0|\leq b$$

于是得到 $\rm Picard$ 序列始终有 $(t,x_k(t))\in D$ .

下证存在可微函数 $\varphi(t)\in D$ 使得 $\rm Picard$ 序列 $x_k(t)$ 一致收敛于 $\varphi(t)$

由于

$$\begin{aligned}x_k(t)=x_0+\sum_{k=1}^{\infty}(x_k(t)-x_{k-1}(t))\tag 1\end{aligned}$$

由上面的讨论有 $|x_k(t)-x_0|\leq M|t-t_0|$ ，于是 $k=1$ 时有

$$|x_1(t)-x_0|\leq M|t-t_0|$$

而由 $\rm Lipschitz$ 条件（说不定这也是为这一步设计的）

$$\begin{aligned}|x_{k+1}(t)-x_k(t)| &=|\int_{t_0}^t(f(s,x_k(s))-f(s,x_{k-1}(s)))ds|\\
&\leq \int_{t_0}^t|f(s,x_k(s))-f(s,x_{k-1}(s))|ds\\
&\leq L\int_{t_0}^t|x_k(s)-x_{k-1}(s)|ds\end{aligned}$$

考虑 $\forall k\geq 1$ 迭代该式，数归证得

$$|x_k(t)-x_{k-1}(t)|\leq \frac ML\cdot\frac{(L|t-t_0|)^k}{k!}$$

由 $|t-t_0|\leq h$

$$|x_k(t)-x_{k-1}(t)|\leq \frac ML\cdot\frac{(L|t-t_0|)^k}{k!}\leq \frac 1{k!}\frac ML\cdot(Lh)^k$$

回到式 $(1)$ ，

$$\begin{aligned}|\sum_{k=1}^{\infty}(x_k(t)-x_{k-1}(t))|&=\sum_{k=1}^{\infty}|x_k(t)-x_{k-1}(t)|\\
&\leq \frac ML\sum_{k=1}^{\infty}\frac 1{k!}(Lh)^k\\
&= \frac ML(e^{Lh}-1)\end{aligned}$$

可以看到，左式小于一个一致收敛的级数，由 $\rm Weierstrass$ 判别法知左式一致收敛。

存在性证毕. 下证唯一性

设该初值问题有两个解 $\varphi(t),\psi(t)$ ，那么它们均满足

$$x(t)=x_0+\int_{t_0}^tf(s,x(s))ds$$

于是

$$\begin{aligned}|\varphi(t)-\psi(t)|&=|\int_{t_0}^t(f(s,\varphi(s))-f(s,\psi(s)))ds|\\
&\leq \int_{t_0}^t|f(s,\varphi(s))-f(s,\psi(s))|ds\\
&\leq L\int_{t_0}^t|\varphi(s)-\psi(s)|ds\\\end{aligned}$$

设 $K=\sup_{t\in D}{|\varphi(t)-\psi(t)|}$ ，迭代上式，可以得到

$$\begin{aligned}|\varphi(t)-\psi(t)|&\leq L\int_{t_0}^t|\varphi(s)-\psi(s)|ds\\
&\leq L^n\int_{t_0}^t\int_{t_0}^{s_1}\cdots\int_{t_0}^{s_{n-1}}|\varphi(s_n)-\psi(s_n)|ds_n\cdots ds_1\\
&\leq L^n\int_{t_0}^t\int_{t_0}^{s_1}\cdots\int_{t_0}^{s_{n-1}}Kds_n\cdots ds_1\\
&=\frac 1{n!}K(L|t-t_0|)^n\leq \frac 1{n!}K(Lh)^n\end{aligned}$$

而极限

$$\lim_{n\rightarrow+\infty}\frac 1{n!}K(Lh)^n=0$$

于是 $|\varphi(t)-\psi(t)|=0$

### 证明2 压缩映像法

