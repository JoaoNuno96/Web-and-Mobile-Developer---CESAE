export class Telemovel
{
  _construct(n,p,c,d,cam){
    this.nome = n,
    this.preco = p,
    this.cor = c,
    this.desconto = d,
    this.caminho = cam
  }

  descontoFinal()
  {
    return Math.round(this.preco * this.desconto / 100);
  }

  precoComDesconto()
  {
    return this.preco - this.descontoFinal();
  }

}
