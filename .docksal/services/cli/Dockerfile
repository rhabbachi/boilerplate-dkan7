# Use a stock Docksal image as the base
FROM docksal/cli:2.5-php7.1

USER docker

RUN set -e; \
    git clone --depth=1 https://github.com/GetDKAN/dkan-tools.git ~/.dktl; \
    # Add composer bin directory to PATH
    echo "\n"'PATH="$PATH:$HOME/.dktl/bin"' >> $HOME/.profile

# To run DKLT commands directly on the container.
ENV DKTL_MODE HOST

# Always switch back to root in the end
USER root