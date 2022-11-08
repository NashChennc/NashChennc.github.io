# 1. 度量空间

## 1.1. 赋范空间

设 $X$ 是一个向量空间，如果映射(内积) $\langle \cdot,\cdot\rangle:X\times X\rightarrow\mathbb R$ 满足

$$\begin{aligned}
\text{正定性} && \langle x,x\rangle\geq 0,\text{且 } \langle x,x\rangle=0\Leftrightarrow x=0\\
\text{对称性} && \langle x,y\rangle=\langle y,x\rangle\\
\text{线性} && \langle x_1+x_2,y\rangle=\langle x_1,y\rangle+\langle x_2,y\rangle\\
&& \lambda\langle x,y\rangle=\langle\lambda x,y\rangle
\end{aligned}$$

则称 $(X,\langle,\rangle)$ 是 **内积空间**. 如果映射(范数/模) $\|\cdot\|:X\rightarrow\mathbb R$ 满足

$$\begin{aligned}
\text{正定性} && \| x\|\geq 0,\text{且 } \| x\|=0\Leftrightarrow x=0\\
\text{数乘} && \|\lambda x\|=|\lambda|\cdot\| x\|\\
\text{三角不等式} && \| x+y\|\leq\| x\|+\| y\|\\
\end{aligned}$$

则称 $(X,\|\cdot\|)$ 为 **赋范空间** 或 **模空间**.

对 $L_2$ 范数，有

$\rm Schwarz$ 不等式和平行四边形等式

## 1.2. 度量空间

如果映射(距离) $\rho(x,y):X\times X\rightarrow \mathbb R$

$$\begin{aligned}
\text{正定性} && \rho(x,y)\geq 0,\text{且 } \rho(x,y)=0\Leftrightarrow x=y\\
\text{对称性} && \rho(x,y)=\rho(y,x)\\
\text{三角不等式} && \rho(x,z)\leq \rho(x,y)+\rho(y,z)\\
\end{aligned}$$

则称 $(X,\rho)$ 为 **度量空间**.

从内积空间出发，可以导出赋范空间和度量空间。读者可以验证下述导出过程的合理性

设 $(X,\langle,\rangle)$ 是一个内积空间，令

$$\|x\|=\langle x,x\rangle^{\frac 12},\rho(x,y)=\|x,y\|$$

则 $(X,\|\cdot\|)$ 是赋范空间， $(X,\rho)$ 是度量空间

## 1.3. 完备性

设 $(X,\rho)$ 是度量空间，如果 $x_n,x\in X$ 满足

$$\lim_{n\rightarrow +\infty} \rho(x_n,x)=0$$

换言之

$$\forall\varepsilon>0,\exists N,s.t.\ n>N\Rightarrow\rho(x_n,x)<\varepsilon$$

则称 $x$ 为 $\{x_n\}$ 的 **极限点**.

如果 $\{x_n\}$ 满足

$$\forall\varepsilon>0,\exists N,s.t.\ n,m>N\Rightarrow\rho(x_n,x_m)<\varepsilon$$

则称 $\{x_n\}$ 是一个 $\rm Cauchy$ 点列. $\rm Cauchy$ 点列是收敛的一个很紧的必要条件. 读者可以自证必要性.

事实上，如果 $\rm Cauchy$ 点列收敛，我们称这个空间是完备的. 而实数是完备的，我们将在实分析中证明这一点，并给出不完备数系的例子.

如果 $X$ 中的所有 $\rm Cauchy$ 点列都收敛，则称 $X$ 是 **完备度量空间**

压缩映像原理

完备的内积空间称为 $\rm Hilbert$ 空间

完备的赋范空间称为 $\rm Banach$ 空间