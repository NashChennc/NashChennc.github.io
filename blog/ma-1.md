# 1. 连续性



# 2. 偏微分

定义 函数 $f[\vec x]:\in\mathbb F^n\mapsto\mathbb F$ 对其自变量 $x_i$ 的 **偏微分** 为

$$\frac{\partial f}{\partial x_i}\in\mathbb F^n\mapsto\mathbb F:\frac{\partial f}{\partial x_i}[\vec x]=\lim_{h\rightarrow 0}\frac {f[\vec x+h\cdot\vec e_i]}{h}$$

这样，会形成一组偏微分组

$$(\frac{\partial f}{\partial x_1},\frac{\partial f}{\partial x_2},\cdots,\frac{\partial f}{\partial x_n})[\vec x]$$

事实上，这个向量值函数就是 **梯度** 。记作 $\textbf{grad } f$ 。

此处，我们指出，定义偏微分时，我们必须认为自变量 $\vec x$ 的各分量不相关且完备。并且我们发现这样一组偏微分仅仅是 $f:\mathbb F^n\mapsto\mathbb F$ 的定义域 $\mathbb F^n$ 中的一组基的基本情况 $(\vec e_1,\vec e_2,\cdots,\vec e_n)$ 。

自然地，我们推广得到

$$\frac{\partial f}{\partial \vec v_i}\in\mathbb F^n\mapsto\mathbb F:\frac{\partial f}{\partial \vec v_i}[\vec x_i]=\lim_{h\rightarrow 0}\frac {f[\vec x+h\cdot\vec v_i]}{h}=\vec v_i\cdot\textbf{grad } f[\vec x]$$

设 $V=(\vec v_1^T,\vec v_2^T,\cdots,\vec v_n^T)$ ，我们有

$$\textbf{grad}_vf=\textbf{grad }f\cdot V$$

定义其全微分为

$$\textrm df=\sum_{i=1}^n\frac{\partial f}{\partial x_i}\textrm dx_i$$

站在线性代数的角度看，我们可以认为 $\textrm df$ 是无关组 $(\textrm dx_1,\cdots,\textrm dx_n)$ 的一个线性组合，即

$$\textrm df\in\langle\textrm dx_1,\cdots,\textrm dx_n\rangle$$

而偏微分给出了其线性组合系数。可以认为 $\textrm dx_i$ 是一个向量。

## 2.1. 复合函数

$$\textrm df[\vec u[\vec x]]=\sum_{i=1}^n\frac{\partial f}{\partial u_i}[\vec u]\textrm du_i=\sum_{i=1}^n\frac{\partial f}{\partial u_i}[\vec u]\sum_{j=1}^n\frac{\partial u_i}{\partial x_j}[\vec x]\textrm dx_j$$

例

$$\textrm df[u[x,y],v[x,y]]=(\frac{\partial f}{\partial u}\frac{\partial u}{\partial x}+\frac{\partial f}{\partial v}\frac{\partial v}{\partial x})\textrm dx+(\frac{\partial f}{\partial u}\frac{\partial u}{\partial y}+\frac{\partial f}{\partial v}\frac{\partial v}{\partial y})\textrm dy$$

# 3. 隐函数

$$f\equiv 0$$

对两边求导，得到

$$\sum_{i=1}^n\frac{\partial f}{\partial x_i}\textrm dx_i\equiv 0$$

特别地，对二元函数

$$\frac{\partial f}{\partial x}\textrm dx+\frac{\partial f}{\partial y}\textrm dy=0$$

$$\frac {\textrm dy}{\textrm dx}=-\frac{\partial f}{\partial x}\Big/\frac{\partial f}{\partial y}$$

# 4. 梯散旋

定义与自变量 $\vec x$ 维数相同的算子

$$\nabla=\sum_{i=1}^n \vec e_i\frac{\partial}{\partial x_i}$$

对多元函数 $f[\vec x]$

$$\textbf{grad } f=\nabla f=\sum_{i=1}^n \vec e_i\frac{\partial f}{\partial x_i}$$

其中 $\vec e_i$ 可以替换成任意一组正交基 $\vec v_i$ 。

$$\sum_{i=1}^n \vec e_i\frac{\partial f}{\partial \vec v_i}=\sum_{i=1}^n\vec v_i\frac{\partial f}{\partial x_i}=(\vec v\cdot \nabla)f$$

对多元向量值函数 $\vec F[\vec x]:\mathbb F^n\mapsto\mathbb F^n$

$$\textbf{div }\vec F=\nabla\cdot \vec F=\sum_{i=1}^n \frac{\partial F_i}{\partial x_i}$$

$$\textbf{rot }\vec F=\nabla\times \vec F$$

# 5. 泰勒展开

将函数 $f[\vec x]$ 在点 $\vec x_0$ 展开相当于将函数 $f[\vec x_0+\vec h]$ 在 $\vec 0$ 展开

$$f[\vec x_0+\vec h]=\sum_{k=0}^m\frac 1{k!}(\vec h\cdot \nabla)^kf[\vec x_0]+R_m$$

$$R_n=\frac 1{(m+1)!}(\vec h\cdot \nabla)^{m+1}f[\vec x_0+\theta\vec h]=\omicron(\rho^m)$$

利用多项式定理将括号打开，得到常用的计算式

$$f[\vec x_0+\vec h]=\sum_{k=0}^m\frac 1{k!}\sum_{\sum r_i=k,~r_i\geq 0}{k\choose{r_1,\cdots,r_n}}\prod_{i=1}^n(h_i\frac{\partial}{\partial x_i})^{r_i}f[\vec x_0]+R_m$$

二元形式 $:f$ 在 $(x_0,y_0)$ 处的展开则是

$$f[x_0+x,y_0+y]=\sum_{k=0}^m\frac 1{k!}\sum_{r+s=k,~r,s\geq 0}{k\choose r,s}x^ry^s\frac{\partial^nf}{\partial x^r\partial y^s}[x_0,y_0]+R_m$$

另外一种计算方法是

> 令 $F[t]=f[\vec x_0+t\vec h]$

> $$f[\vec x_0+\vec h]=\sum_{k=0}^m\frac 1{k!}\cdot \frac{\textrm d^kF}{\textrm dt^k}[0]+R_m$$

证明如下

令 $\vec x=\vec x_0+t\vec h$ ，根据复合函数的求导公式，可以发现

$$\frac {\textrm d}{\textrm dt}=\sum_{i=1}^n\frac{\partial}{\partial x_i}\cdot\frac{\textrm dx_i}{\textrm dt}=\vec h\cdot\nabla$$

写出 $F[t]=f[\vec x_0+t\vec h]$ 在 $\vec 0$ 处的一阶展开在 $t=1$ 处的值，就是 $f[\vec x_0+\vec h]$ 的在 $\vec 0$ 处的展开。

$$\begin{aligned}F[t]&=\sum_{k=0}^m\frac {t^k}{k!}\cdot \frac{\textrm d^kF}{\textrm dt^k}[0]+R_m\\
&=\sum_{k=0}^m\frac {t^k}{k!}(\vec h\cdot \nabla)^kf[\vec x_0]+R_m
\end{aligned}$$

# 6. 极值问题

## 6.1. 二元极值

对 $f[x,y]$ 定义驻点

$$\frac{\partial f}{\partial x}[x_0,y_0]=\frac{\partial f}{\partial y}[x_0,y_0]=0$$

容易看出，极值点一定是驻点。再考虑其二阶偏导数，令

$$A=\frac{\partial^2 f}{\partial x^2}[x_0,y_0],\quad B=\frac{\partial^2 f}{\partial x\partial y}[x_0,y_0],\quad C=\frac{\partial^2 f}{\partial y^2}[x_0,y_0],\quad $$

$$\delta =f[x_0+h,y_0+k]-f[x_0,y_0]=\frac 12(Ah^2+2Bhk+Ck^2)+\omicron(\rho^2)$$

容易看出，如果 $\delta$ 是 **正(负)定的**，则 $(x_0,y_0)$ 就是极小(大)值。根据中学代数知识，对如上二次型，我们有如下判别方法

> 令 $\Delta=B^2-AC$

> 若 $\Delta>0$

> * $A>0$ ，那么 $\delta>0$ ，$(x_0,y_0)$ 是极小值

> * $A<0$ ，那么 $\delta<0$ ，$(x_0,y_0)$ 是极大值

> 若 $\Delta<0$ ，那么 $(x_0,y_0)$ 不是极值

> 若 $\Delta=0$ ，**不能判断** $(x_0,y_0)$ 是不是极值

线性代数中将会讨论到其他的二次型。而如果二阶导数恒为 $0$ ，则需要考虑更高阶的导数。在此不作讨论。

## 6.2. 拉格朗日乘子法

拉格朗日乘子法是一种求解条件极值问题中的驻点的方法。

在约束 $\varphi[\vec x]\equiv 0$ 下 $f[\vec x]$ 的驻点应满足

$$\begin{cases}
\nabla f+\lambda\nabla\varphi=\vec 0 && (1)\\
\varphi=0 && (2)
\end{cases}$$

上式一共有 $n+1$ 条方程。式 $(1)$ 表明 $\nabla f$ 和 $\nabla \varphi$ 在驻点处共线。式 $(2)$ 为约束条件。方程未知数也恰有 $\vec x,\lambda$ 共 $n+1$ 个。