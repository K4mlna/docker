# Utilisez l'image de base Ubuntu
FROM ubuntu:latest

# Mettez à jour le système et installez des paquets de base
RUN apt-get update && apt-get install -y \
    software-properties-common \
    curl \
    wget \
    && rm -rf /var/lib/apt/lists/*

# Commande par défaut à exécuter lorsque le conteneur démarre
CMD ["/bin/bash"]
