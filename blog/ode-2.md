# 1. 线性常微分方程

如果未知函数 $x(t)$ 及其各阶导数 $x^{(k)}$ 均以一次出现，则称为 **线性微分方程** 。

$$\sum_{k=0}^n p_k(t)\frac{d^kx}{dt^k}=f(t)$$

如果 $f(t)\equiv 0$ ，称为 **线性齐次微分方程** 。

可以证明，线性非齐次微分方程的通解由它的一个特解以及对应线性齐次微分方程的通解组成。

# 2. 常系数 线性 常微分方程

## 2.1. 常系数 线性 齐次 常微分方程

$$\sum_{k=0}^n a_k\frac{d^kx}{dt^k}=0$$

注意到

$$(\frac d{dt})^k(e^{\lambda t})=\lambda^k e^{\lambda t}$$

令 $x= e^{\lambda t}$ ，方程可以化为

$$e^{\lambda t}\sum_{k=0}^n a_k\lambda^k=0$$

我们称

$$\sum_{k=0}^n a_k\lambda^k=0$$

为该常系数常微分方程的 **特征方程**。设方程有 $n$ 个复根，重数为 $\sum_{k=1}^m s_k=n$

$$\sum_{k=0}^n a_k\lambda^k=\prod_{k=1}^m (\lambda-\lambda_k)^{s_k}=0$$

则微分方程的通解为

$$x=\sum_{k=1}^m e^{\lambda t}(\sum_{l=0}^{s_k-1}C_{k,l}t^l)$$

## 2.1. 算子法求非齐次方程特解

微分映射是线性映射，定义算子

$$\mathcal D:x\mapsto\mathcal D x=\frac{dx}{dt}$$

* $P(\mathcal D)e^{\lambda t}=P(\lambda)e^{\lambda t}$
* $P(\mathcal D^2)\sin(\omega t)=P(-\omega^2)\sin(\omega t)$
* $P(\mathcal D^2)\cos(\omega t)=P(-\omega^2)\cos(\omega t)$

另外有一条较泛用的等式

* $P(\mathcal D)[e^{\lambda t}x(t)]=e^{\lambda t}P(\mathcal D+\lambda)[x(t)]$

可以由数归证得

有常用推论

$$\frac 1{P(\mathcal D)}[e^{\lambda t}x(t)]=e^{\lambda t}\frac 1{P(\mathcal D+\lambda)}x(t)$$

例如 $(\mathcal D^2+1)x=\sin x$

于是常系数线性常微分方程可以写为

$$\sum_{k=0}^n a_k\mathcal Dx=P(\mathcal D)x=f(t)$$

非齐次方程特解可以表示为

$$x=\frac{1}{P(\mathcal D)}f(t)$$

$\frac 1{P(\mathcal D)}$ 可以利用多项式除法或多项式结论得到。通常来说这是一个无穷幂级数，但我们在一些情况下可以得到形式

如果 $f(t)$ 是 $n-1$ 次多项式，换句话说，$\mathcal D^nf(t)=0$ ，设 $P(x)=x^lg(x)$

$$x=\frac 1{\mathcal D^l}(\frac 1{g(\mathcal D)}\bmod \mathcal D^n)f(t)$$



# 3. 线性 常微分方程组