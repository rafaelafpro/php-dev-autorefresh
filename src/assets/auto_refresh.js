class AutoRefresh {
  constructor(url, interval = 3000) {
    this.url = url;
    this.interval = interval;
    this.lastModified = null;
    this.startChecking();
  }

  async checkForUpdates() {
    try {
      const response = await fetch(this.url);
      const data = await response.json();

      if (this.lastModified && this.lastModified !== data.lastModified) {
        console.log(
          "[auto-refresh] Atualizações detectadas! Recarregando a página..."
        );
        location.reload();
      }

      this.lastModified = data.lastModified;
    } catch (error) {
      console.error("Erro ao verificar atualizações:", error);
    }
  }

  startChecking() {
    setInterval(() => this.checkForUpdates(), this.interval);
  }
}

// Exemplo de inicialização:
// const refresh = new AutoRefresh('/last_modified.php');
