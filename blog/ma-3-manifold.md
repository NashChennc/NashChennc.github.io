# 2. 微分流形

## 2.1. 可微映射

可微 有偏导数

有连续偏导数 可微

$r$ 阶连续偏导数类 $C^r$

局部微分同胚 互相存在邻域映射

## 2.2. 反函数定理

如果映射 $F\in C^r(r\geq 1):U\in\tau(\mathbb R^n)\rightarrow \mathbb R^n$ 满足

$$\mathrm{rank}\big(\frac{\partial F_i}{\partial x_j}(x_0)\big)=n$$

则 $F$ 是一个 $C^r$ 的局部微分同胚.

## 2.3. 隐函数定理

如果映射 $f\in C^r(r\geq 1):U\in\tau(\mathbb R^m\times\mathbb R^n)\rightarrow \mathbb R^n$ 满足

$$f(x_0,y_0)=0,\quad\det(\frac{\partial F_i}{\partial y_j}(x_0,y_0)\big)\not=0$$

则

$$\exists !g\in C^r:U(x_0)\in\tau(\mathbb R^m)\rightarrow\mathbb R^n,\textrm{s.t.  }g(x_0)=y_0,f(x,g(x))=0$$

### 推论 1a

如果映射 $f\in C^r(r\geq 1):U\in\tau(\mathbb R^m)\rightarrow \mathbb R^n(m\leq n)$ 满足

$$f(0)=0,\quad\mathrm{rank}\big(\frac{\partial F_i}{\partial x_j}(0)\big)=m(\leq n)$$

则存在一个 $C^r$ 的微分同胚 $g:\mathbb R^n\rightarrow\mathbb R^n$ ，使得

$$g(0)=0,\quad g\circ f(x_1,\cdots,x_m)=(x_1,\cdots,x_m,0_{n-m})$$

### 推论 1b

如果映射 $f\in C^r(r\geq 1):U\in\tau(\mathbb R^m)\rightarrow \mathbb R^n(m\geq n)$ 满足

$$f(0)=0,\quad\mathrm{rank}\big(\frac{\partial F_i}{\partial x_j}(0)\big)=n(\leq m)$$

则存在一个 $C^r$ 的微分同胚 $h:\mathbb R^m\rightarrow\mathbb R^m$ ，使得

$$h(0)=0,\quad f\circ h(x_1,\cdots,x_m)=(x_1,\cdots,x_n)$$

### 推论 1(a+b)

如果映射 $f\in C^r(r\geq 1):U\in\tau(\mathbb R^m)\rightarrow \mathbb R^n$ 满足

$$f(0)=0,\quad\mathrm{rank}\big(\frac{\partial F_i}{\partial x_j}(0)\big)=l(\leq n,m)$$

则存在 $C^r$ 的微分同胚 $g:\mathbb R^n\rightarrow\mathbb R^n$ 和 $h:\mathbb R^m\rightarrow\mathbb R^m$ ，使得


$$g(0)=0,h(0)=0,\quad g\circ f\circ h(x_1,\cdots,x_m)=(x_1,\cdots,x_l,0_{n-l})$$



