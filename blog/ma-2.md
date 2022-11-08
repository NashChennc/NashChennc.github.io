# 1. 多变量积分的可积性

对区域 $D\subset\mathbb R^n$ ，设 $D_1,D_2,\cdots,D_k$ 是 $D$ 的一个有限划分，记

$$|T|=\max_{i=1}^k\textrm{diam }D_i$$

记 $\sigma(D_i)$ 为 $D_i$ 的体积，令 $\vec x_i\in D_i$ ，称

$$S(T)=\sum_{i=1}^kf[\vec x_i]\sigma(D_i)$$

为 $f[\vec x]:\mathbb R^n\mapsto\mathbb R$ 在 $D$ 上的一个 **$\rm Riemann$ 和**。如果无论怎样划分，黎曼和都有极限，则称这个极限为 $f[\vec x]$ 在 $D$ 上的 **(重)积分** 。记作

$$\iint\cdots\int_D f[\vec x]\textrm d\sigma=\lim_{T\rightarrow 0}S(T)$$

## 1.1. $\rm Darboux$ 和

令

$$M_i=\max_{\vec x_i\in D_i} f[\vec x],\quad m_i=\min_{\vec x_i\in D_i} f[\vec x_i]$$

定义 $f[\vec x]$ 在 $D$ 上的 **$\rm Darboux$ 上/下和** 以及 **振幅**

$$\overline S(T)=\sum_{i=1}^m M_i\sigma(D_i),\quad \underline S(T)=\sum_{i=1}^mm_i\sigma(D_i)$$

$$\omega(T)=\overline S(T)-\underline S(T)\geq 0$$

应当认识到， $\overline S(T),\underline S(T),\omega(T)$ 关于不同的划分应当有一个取值范围。当 $T\rightarrow 0$ 时，这个范围是不扩张的，并且

于是显然有

$$m\sigma(D)\leq \underline S(T)\leq S(T)\leq\overline S(T)\leq M\sigma(D)$$

$$\sup_T\underline S(T)\leq\inf_T \overline S(T)$$

> **定理1**:可积函数必有界

> **定理2**: $f[\vec x]$ 在 $D$ 上可积当且仅当

> $$\sup_T\underline S(T)\leq\inf_T \overline S(T),\text{即}\inf_T\omega(T)=0$$



## 1.2. $\rm Jordan$ 测度

这个大概不用管

# 2. 重积分




## 2.1. 累次积分

$$\iint\limits_{[l_1,r_1]\times[l_2,r_2]} f[x,y]~\textrm dx\textrm dy=\int_{l_1}^{r_1}\textrm dx\int_{l_2[x]}^{r_2[x]} f[x,y]~\textrm dy$$

## 2.2. 换元法

我们运用到一个事实

> $$\textrm dx\textrm dy=\Big|\frac{\partial(x,y)}{\partial(u,v)}\Big|\textrm du\textrm dv$$

设 $\phi:(x,y)\mapsto(u,v)$ ，$\phi(D')=D$

$$\iint_{D'} f[x,y]~\textrm dx\textrm dy=\iint_D f[u,v]~\Big|\frac{\partial(x,y)}{\partial(u,v)}\Big|\textrm du\textrm dv$$

三维同理

# 3. 第一型曲线和曲面积分

第一型曲线/曲面积分，即被积场是标量场的积分。

## 3.1. 第一型曲线积分

设曲线 $L\subset\mathbb R^n$ 的参数方程为

$$\vec {\bold r}=\vec r[t],\quad t\in[\alpha,\beta]$$

若 $t\mapsto \vec r$ 是一一对应，且在该区间有不为 $\vec 0$ 的导数，则 $L$ 是可求长的，其长度为

$$s=\int_L\textrm ds=\int_{\alpha}^{\beta}\sqrt{\sum_{i=1}^n\Big(\frac{\textrm d r_i}{\textrm d t}\Big)^2}~\textrm dt=\int_{\alpha}^{\beta}\sqrt{\sum_{i=1}^n\textrm dr_i^2}$$

我们定义 **第一型曲线积分** 为

$$\int_Lf[\vec x]\textrm ds=\int_{\alpha}^{\beta}f[\vec r[t]]\sqrt{\sum_{i=1}^n\Big(\frac{\textrm d r_i}{\textrm d t}\Big)^2}~\textrm dt$$

积分时，只需要做到 $f$ 与 $\textrm ds$ 在每一点都对应即可。

### 3.1.1. 平面上的曲线积分

对常用的一些二维情形，我们有

$$L:y=y[x],\quad \textrm ds=\sqrt{1+\Big(\frac {\textrm dy}{\textrm dx}\Big)^2}~\textrm dx$$

$$L:r=r[\theta],\quad\textrm ds=\sqrt{r^2+\Big(\frac {\textrm dr}{\textrm d\theta}\Big)^2}~\textrm d\theta$$

## 3.2. 第一型曲面积分

设曲面 $S\subset\mathbb R^3$ 的参数方程为

$$\vec {\bold r}=\vec r[u,v],\quad u,v\in D$$

嗯...这里是 $\mathbb R^3$ ，因为我暂时还不知道更高维如何推广...

若 $(u,v)\mapsto \vec r$ 是一一对应，且在该区间有不为 $\vec 0$ 的导数，则 $S$ 的面积为

$$S=\iint_S\textrm dS=\iint_D\Big|\frac{\partial\vec r}{\partial u}\times\frac{\partial\vec r}{\partial v}\Big|\textrm du\textrm dv=\iint_D\sqrt{EG-F^2}~\textrm du\textrm dv$$

其中

$$E=\Big(\frac{\partial\vec r}{\partial u}\Big)^2$$

$$G=\Big(\frac{\partial\vec r}{\partial v}\Big)^2$$

$$F=\frac{\partial\vec r}{\partial u}\cdot\frac{\partial\vec r}{\partial v}$$

我们定义 **第一型曲面积分** 为

$$\iint_Sf[\vec x]\textrm dS=\iint_Df[\vec r[u,v]]\Big|\frac{\partial\vec r}{\partial u}\times\frac{\partial\vec r}{\partial v}\Big|\textrm du\textrm dv$$

积分时，只需要做到 $f$ 与 $\textrm dS$ 在每一点都对应即可。

如果曲面方程为显式方程，则计算大为简化，因为若有

$$f[x,y,z[x,y]]=0$$

相当于令 $\vec r=(u,v,z[u,v])$ ，此时

$$\frac{\partial\vec r}{\partial u}=(1,0,\frac{\partial z}{\partial x}),\quad\frac{\partial\vec r}{\partial v}=(0,1,\frac{\partial z}{\partial y})$$

$$\textrm dS=\Big|\frac{\partial\vec r}{\partial u}\times\frac{\partial\vec r}{\partial v}\Big|\textrm du\textrm dv=\sqrt{1+\Big(\frac{\partial z}{\partial x}\Big)^2+\Big(\frac{\partial z}{\partial y}\Big)^2}~\textrm dx\textrm dy$$

# 4. Green定理

$$\int_{\partial S}\vec F\cdot(\textrm dx,\textrm dy)=\iint_S(\frac{\partial F_2}{\partial x}-\frac{\partial F_1}{\partial y})~\textrm dx\textrm dy$$

# 5. Gauss定理和Stokes定理

$$\textrm df$$

$$\textrm dl=(\textrm dx,\textrm dy,\textrm dz)$$

$$\textrm dS= (\textrm dy\textrm dz,\textrm dz\textrm dx,\textrm dx\textrm dy)$$

$$\textrm dV=\textrm dx\textrm dy\textrm dz$$

$$\iint_{\partial V}\vec F\cdot \textrm dS=\iiint_V(\nabla\cdot \vec F)~\textrm dV$$

$$\int_{\partial S}\vec F\cdot\textrm dl=\iint_S(\nabla\times\vec F)~\cdot \textrm dS$$

